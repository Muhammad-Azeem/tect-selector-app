import React, {Component} from 'react';
import {connect, Provider} from "react-redux";
import {
    createActivityRequest,
    emailReportRequest,
    phaseQuestionsAndAns,
    phaseRequest,
    updateActivityRequest
} from "./data/actions";
import {
    createActivityResponse,
    createUserResponse,
    currentPhase,
    getQuestionAnsFetching,
    getQuestionAnsResponse
} from "../common/selector";
import {MAX_PHASE, MIN_PHASE,BLOG_LINK} from "../common/constants";
import ReactDOM from "react-dom";
import redux from '../store.js';

const {store} = redux;
import PhaseC from "./Phase"
import {createUserRequest} from "../user/data/actions";

class Phase extends Component {
    constructor(props) {
        super(props);
        this.state = {
            questionNo: 0,
            questions: null,
            data: [],
            questionId: null,
            answerIds: [],
            activityId: null,
            isFinish: false,
            error: null,
            user: null,
            stopFlow: false,
            note: null,
            userId: null,
            phaseThreeNextQuestionNo: 0,
            phaseThreeNextQuestionIds: 0,
        }
    }

    componentDidMount() {
        this.props.phaseRequest(1);
        this.props.phaseQuestionsAndAns(1);
        this.setState({data: [{'phase_id': '1', questions: []}], user: this.props.createUserResponse})

    }

    componentDidUpdate(prevProps, prevState, snapshot) {
        if (this.props.createUserResponse && prevProps.createUserResponse !== this.props.createUserResponse) {
            this.setState({userId: this.props.createUserResponse.data.id})
        }
        if (this.props.createActivityResponse && prevProps.createActivityResponse !== this.props.createActivityResponse) {
            this.setState({activityId: this.props.createActivityResponse.id},
                () => {
                    this.props.emailReportRequest(this.state);
                })

        }

        if (this.props.getQuestionAnsResponse && prevProps.getQuestionAnsResponse !== this.props.getQuestionAnsResponse) {
            let questionNo = 0;
            if (this.state.data[this.props.currentPhase - 1].questions.length) {
                const data = _.cloneDeep(this.state.data);
                let result = this.props.getQuestionAnsResponse.data.questions.find(obj => obj.id === data[this.props.currentPhase - 1].questions[data[this.props.currentPhase - 1].questions.length - 1].question_id);
                questionNo = this.props.getQuestionAnsResponse.data.questions.indexOf(result);
                questionNo = questionNo > -1 ? questionNo : 0;
            }
            this.setState({questions: this.props.getQuestionAnsResponse.data.questions, questionNo: questionNo})
        }
    }

    _next(phaseNo) {

        if(phaseNo === 2 && this.state.questionNo === 1 && !(this.validateEmail(this.state.answerIds[0])))
        {
            this.setState({error: 'Please Enter Valid Email'})
        }else
            {
                if (this.state.answerIds.length)
                    this.state.questionNo < this.props.getQuestionAnsResponse.data.questions.length - 1 ? this._changeQuestion(phaseNo) : this._changePhase(phaseNo);
                else
                    this.setState({error: 'Please select an option'})
            }

    }

    _changePhase(phaseNo) {
        phaseNo < MAX_PHASE ? this._nextPhase(phaseNo) : this._phasesFinished();
    }

    _nextPhase(phaseNo) {

        if (this.props.createActivityResponse) {
            this.setState({activityId: this.props.createActivityResponse.id},
                () => {
                    this.props.updateActivityRequest(this.state)
                });
        } else if (phaseNo > 2) {
            this.props.createActivityRequest(this.state);
        }
        if (phaseNo > 1)
            this.props.createUserRequest(this.state);
        const data = _.cloneDeep(this.state.data);
        data[phaseNo - 1].questions.push({
            'question_id': this.props.getQuestionAnsResponse.data.questions[this.state.questionNo].id,
            'answer_id': this.state.answerIds
        });
        data.push({'phase_id': phaseNo + 1, questions: []});
        this.setState({questionNo: 0, questions: null, data: data, answerIds: [], error: null});
        this.props.phaseQuestionsAndAns(phaseNo + 1);
        this.props.phaseRequest(phaseNo + 1);

    }

    async _phasesFinished() {
        await this.props.createActivityRequest(this.state);
        this.setState({isFinish: true});
    }

    _changeQuestion(phaseNo) {

        let self = this;
        const data = _.cloneDeep(this.state.data);
        let result = data[phaseNo - 1].questions.find(obj => obj.question_id === this.props.getQuestionAnsResponse.data.questions[this.state.questionNo].id);
        if (!result)
            data[phaseNo - 1].questions.push({
                'question_id': this.props.getQuestionAnsResponse.data.questions[this.state.questionNo].id,
                'answer_id': this.state.answerIds
            });
        // else
        // {
        //     result.answer_id = this.state.answerIds;
        //     console.log(result.answer_id);
        //     data[phaseNo-1].questions.push({'question_id': this.props.getQuestionAnsResponse.data.questions[this.state.questionNo].id, 'answer_id': this.state.answerIds });
        // }

        if (phaseNo === 3) {
            if (self.state.questionNo === 0) {
                let tempArray = new Array();
                self.state.answerIds.map(function (answerId) {

                    self.state.questions.map(function (question) {
                        var temp = question.answers.find(answer => answer.id === answerId)
                        if (temp) {
                            if (temp.meta)
                                tempArray.push(temp.meta)
                        }
                    })
                })
                if (tempArray[0]) {
                    let result = this.state.questions.find(obj => obj.id === tempArray[0].question_id);
                    let nextQuestionId = this.state.questions.indexOf(result);
                    self.setState({
                        questionNo: nextQuestionId,
                        phaseThreeNextQuestionIds: tempArray,
                        phaseThreeNextQuestionNo: 1,
                        data: data,
                    })

                } else {
                    const data = _.cloneDeep(this.state.data);
                    data[phaseNo - 1].questions.push({
                        'question_id': this.props.getQuestionAnsResponse.data.questions[this.state.questionNo].id,
                        'answer_id': this.state.answerIds
                    });
                    this.setState({
                        data: data
                    }, () => {
                        this._phasesFinished();
                    })
                }
            } else {
                if (this.state.phaseThreeNextQuestionIds.length > this.state.phaseThreeNextQuestionNo) {
                    if (this.state.phaseThreeNextQuestionIds[this.state.phaseThreeNextQuestionNo].question_id) {
                        let result = self.state.questions.find(obj => obj.id === self.state.phaseThreeNextQuestionIds[this.state.phaseThreeNextQuestionNo].question_id);

                        let nextQuestionId = this.state.questions.indexOf(result);
                        self.setState({
                            questionNo: nextQuestionId,
                            phaseThreeNextQuestionNo: this.state.phaseThreeNextQuestionNo + 1,
                            data: data,
                        })

                    } else {
                        let result = self.state.questions.find(obj => obj.id === self.state.phaseThreeNextQuestionIds[this.state.phaseThreeNextQuestionNo].question_id);

                        let nextQuestionId = this.state.questions.indexOf(result);
                        self.setState({
                            questionNo: nextQuestionId,
                            phaseThreeNextQuestionNo: this.state.phaseThreeNextQuestionNo + 1,
                            data: data,
                        })
                    }
                } else {
                    // const data = _.cloneDeep(this.state.data);
                    const data = _.cloneDeep(this.state.data);
                    data[phaseNo - 1].questions.push({
                        'question_id': this.props.getQuestionAnsResponse.data.questions[this.state.questionNo].id,
                        'answer_id': this.state.answerIds
                    });
                    this.setState({
                        data: data
                    }, () => {
                        this._phasesFinished();
                    })

                }

            }
        } else {
            let nextQuestionId = this._checkCondition(phaseNo);
            if(nextQuestionId ===11)
            {
                this._nextPhase(phaseNo);
            }
            else {
                nextQuestionId = nextQuestionId > -1 ? nextQuestionId : this.state.questionNo + 1;
                this.setState({questionNo: nextQuestionId, data: data, answerIds: [], error: null})
            }
        }

    }

    _checkCondition(phaseNo) {
        let self = this;
        const data = _.cloneDeep(this.state.data);
        let nextQuestionId = 0;
        if (this.state.questions[this.state.questionNo].meta.condition) {
            this.state.questions[this.state.questionNo].meta.condition.map(function (data) {
                if (self.state.answerIds[0] == data.answer_id) {
                    if (data.other) self.setState({stopFlow: true, note: data.other}); else if (data.condition) {
                        self.state.data[phaseNo - 1].questions.map(function (question) {
                            if (data.condition[0].question_id == question.question_id && question.answer_id[0] == data.condition[0].answer_id) nextQuestionId = data.question_id;
                        });
                    } else if (data.question_id) nextQuestionId = data.question_id;
                }
            });
            if(nextQuestionId == 11)
                return nextQuestionId;
            let result = this.state.questions.find(obj => obj.id === nextQuestionId);
            return this.state.questions.indexOf(result);
        }
        return -1;
    }

    _handleSingleValue(e) {
        const data = [];
        data.push(e.currentTarget.value);
        this.setState({answerIds: data, error: null});
    }

    _handleMultipleValue(id) {
        const data = _.cloneDeep(this.state.answerIds);
        let index = data.indexOf(id);
        index !== -1 ? data.splice(index, 1) : data.push(id);
        this.setState({answerIds: data, error: null});
    }

    _restart(phaseNo) {
        this.props.phaseRequest(phaseNo);
        this.props.phaseQuestionsAndAns(1);
        this.setState({data: [{'phase_id': '1', questions: []}], questionNo: 0, error: null});
    }

    _back(phaseNo) {

        this.state.questionNo ? this._oneQuestionBack(phaseNo - 1) : this._onePhaseBack(phaseNo)
    }

    async _oneQuestionBack(phaseNo) {
        await this.updateOldAnswers(phaseNo);
        const data = _.cloneDeep(this.state.data);
        let result = this.state.questions.find(obj => obj.id === data[phaseNo].questions[data[phaseNo].questions.length - 1 ].question_id);

        let prevQuestionId = this.state.questions.indexOf(result);

        this.setState({questionNo: prevQuestionId, error: null, data: data},
            () => {
                data[phaseNo].questions.splice(data[phaseNo].questions.length-1 , 1);

            });
    }

    _onePhaseBack(phaseNo) {
        if (phaseNo > MIN_PHASE) {
            const data = _.cloneDeep(this.state.data);
            data.splice(phaseNo - 1, 1);
            this.props.phaseQuestionsAndAns(phaseNo - 1);
            this.props.phaseRequest(phaseNo - 1);
            data[phaseNo - 2].questions.splice(this.state.data[phaseNo - 2].questions.length, 1);
            data[phaseNo - 2].questions = [...new Map(data[phaseNo - 2].questions.map(item => [item.question_id, item])).values()]; //remove duplicates
            this.setState({error: null, questionNo: data[phaseNo - 2].questions.length - 1, data: data},
                () => {
                    this.updateOldAnswers(phaseNo - 2);
                });
        }
    }

    updateOldAnswers(phaseNo) {
        let self = this;
        this.state.data[phaseNo].questions.map(function (data) {
            const temp = [];
            data.answer_id.map(function (id) {
                if (self.isChecked(id)) {
                    temp.push(id);
                }
            })
            self.setState({answerIds: temp});
        });
    }

    isChecked(answerId) {
        let ansId = "";
        this.state.data.map(function (data) {
            data.questions.map(function (question) {
                question.answer_id.map(function (answer) {
                    if (answer == answerId)
                    {
                        ansId = answerId;
                    }
                });
            })
        });
        if (ansId)
            return ansId
    }
    validateEmail (email) {
        const regexp = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return regexp.test(email);
    }
    _onChangeHandler(e) {
        let name = e.target.name.replace(/ /g, "_");
        name = name.replace(/'/g, "_");
        name = name.toLowerCase();
        const data = [];
        data.push(e.currentTarget.value);
        this.setState({[name]: e.target.value, answerIds: data, error: null});
    };
    submitHandler(e) {
        e.preventDefault();
    }
    render() {
        return (
            <div>
                <img className="logo" src="images/logo.png" alt=""/>

                <img className="oval-2" src="images/Oval-2.png" alt=""/>

                <div className="custom-container">
                    <h2>
                        Assistive Technology Selector
                    </h2>

                    <h3 style={{marginBottom: '20px'}}>
                        Helping Parents to Better Select Technology
                    </h3>

                    <img className="left" src="images/Oval-1.png" alt=""/>

                    <img className="right" src="images/Oval-1.png" alt=""/>

                    <img className="girl" src="images/girl.png" alt=""/>

                    <img className="boy" src="images/boy.png" alt=""/>
                    {this.state.isFinish || this.state.stopFlow ? (this.state.stopFlow ?
                            (<div className="kt-portlet" style={{height: '530px'}}>
                                <h2 style={{marginTop: '20%'}}>
                                    We currently can’t help you
                                </h2>
                                <h3 style={{marginBottom: '20px', marginTop: '20px'}}>
                                    {this.state.note}
                                </h3>
                                <a type="reset" href={BLOG_LINK} className="btn btn-info" style={{
                                    width: '200px',
                                    marginLeft: '35%',
                                    backgroundColor: '#feaf08',
                                    borderColor: '#feaf08',
                                    color: 'white'
                                }}>Checkout our blog
                                </a>
                            </div>)
                            :
                            (<div className="kt-portlet" style={{height: '530px'}}>
                                <h2 style={{marginTop: '20%'}}>
                                    All done!
                                </h2>
                                <h3 style={{marginBottom: '20px'}}>
                                    Thanks for working through those questions.
                                </h3>
                                <h3 style={{marginBottom: '20px', marginLeft: '10px', marginRight: '10px'}}>
                                    We have just sent you a report with recommendations for your child and the assistive
                                    technology that should support them.
                                </h3>
                                <a type="reset" href={BLOG_LINK} className="btn btn-info" style={{
                                    width: '200px',
                                    marginLeft: '35%',
                                    backgroundColor: '#feaf08',
                                    borderColor: '#feaf08',
                                    color: 'white'
                                }}>Checkout our blog
                                </a>
                            </div>)

                    ) : (
                        <div className="kt-portlet" style={{height: '530px', color: '#465366'}}>

                            <h2>
                                {this.props.getQuestionAnsResponse && (this.props.currentPhase === 1 && this.state.questionNo === 0 ? null : this.props.getQuestionAnsResponse.data.name)}
                            </h2>
                            {this.props.getQuestionAnsFetching ?
                                (<div className="spinner-grow textc" role="status" style={{
                                    color: '#88D34E !important',
                                    width: '50px',
                                    height: '50px',
                                    align: 'center',
                                    marginLeft: '46%',
                                    marginTop: '20%'
                                }}>
                                    <span className="sr-only">Loading...</span>
                                </div>) :
                                (<form className="kt-form" onSubmit={this.submitHandler}>
                                    <div className="kt-portlet__body">
                                        <div className="kt-section kt-section--first">
                                            <div className="form-group">
                                                <label>{this.props.getQuestionAnsResponse && this.state.questions[this.state.questionNo].meta.type !== 'input' ? (this.props.getQuestionAnsResponse.data.questions[this.state.questionNo].title) : null}</label>
                                                {this.state.error && (<p style={{color: 'red'}}>{this.state.error}</p>)}
                                                <div className="kt-checkbox-list">
                                                    <label className="kt-checkbox">
                                                        {this.state.questions && this.state.questions[this.state.questionNo].meta.type === 'input' ?
                                                            (
                                                                <div className="form-group">
                                                                    <label>{this.state.questions[this.state.questionNo].title}:</label>
                                                                    <input type={(this.state.questions[this.state.questionNo].title === 'Parent Email Address')?'email':'text'} className="form-control"
                                                                           name={this.state.questions[this.state.questionNo].title}
                                                                           value={this.state.answerIds}
                                                                           placeholder={this.state.questions[this.state.questionNo].title}
                                                                           onChange={(e) => this._onChangeHandler(e)}/>
                                                                </div>
                                                            )
                                                            :
                                                            (this.state.questions && this.state.questions[this.state.questionNo].meta.type === 'single' ?
                                                                (this.state.questions && this.state.questions[this.state.questionNo].answers.map((item, key) =>
                                                                    <label className="kt-checkbox" key={item.title}>
                                                                        <input type="radio" name={'same'} key={item.id}
                                                                               value={item.id}
                                                                               onChange={(e) => this._handleSingleValue(e)}
                                                                               checked={this.isChecked(item.id)}/> {item.title}
                                                                        <span></span>
                                                                    </label>))
                                                                :
                                                                (this.state.questions && this.state.questions[this.state.questionNo].answers.map((item, key) =>
                                                                    <label className="kt-checkbox" key={item.title}>
                                                                        <input type="checkbox" name={item.title}
                                                                               value={item.id} key={item.id}
                                                                               onChange={() => this._handleMultipleValue(item.id)}
                                                                               checked={this.isChecked(item.id)}/> {item.title}
                                                                        <span></span>
                                                                    </label>
                                                                )))}
                                                    </label>
                                                    <p style={{textAlign:'center'}} className='text-info'>{this.props.getQuestionAnsResponse && this.props.getQuestionAnsResponse.data.questions[this.state.questionNo].meta.note !== null?(this.props.getQuestionAnsResponse.data.questions[this.state.questionNo].meta.note):''}</p>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div className="kt-portlet__foot">
                                        <div className="kt-form__actions">
                                            <div className="row">
                                                <div className="col-8 col-sm-6">
                                                    <button type="reset" className="btn btn-info"
                                                            onClick={() => this._restart(1)}>Restart
                                                    </button>
                                                    <button type="reset"
                                                            className="btn btn-secondary" style={{marginLeft: '5px'}}
                                                            onClick={() => this._back(this.props.currentPhase)}> Back
                                                    </button>
                                                </div>

                                                <div className="col-4 col-sm-6 text-right">
                                                    <button type="reset" className="btn btn-success"
                                                            style={{backgroundColor: '#feaf08', borderColor: '#feaf08'}}
                                                            onClick={() => this._next(this.props.currentPhase)}>Next
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>)}
                        </div>
                    )}
                </div>
            </div>
        )
    };
}

function mapStateToProps(state) {
    return {
        currentPhase: currentPhase(state),
        getQuestionAnsResponse: getQuestionAnsResponse(state),
        createActivityResponse: createActivityResponse(state),
        getQuestionAnsFetching: getQuestionAnsFetching(state),
        createUserResponse: createUserResponse(state),
    }
}

const mapDispatchToProps = {
    phaseRequest: phaseRequest,
    phaseQuestionsAndAns: phaseQuestionsAndAns,
    createActivityRequest: createActivityRequest,
    updateActivityRequest: updateActivityRequest,
    emailReportRequest: emailReportRequest,
    createUserRequest: createUserRequest
};

export default connect(mapStateToProps, mapDispatchToProps)(Phase);

if (document.getElementById('phase')) {
    ReactDOM.render(
        <Provider store={store}>
            <PhaseC/>
        </Provider>, document.getElementById('phase'));
}
