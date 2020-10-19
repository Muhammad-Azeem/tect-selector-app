import React, {Component} from 'react';
import ReactDOM from 'react-dom';
import {connect, Provider} from "react-redux";
import redux from '../store.js';
import CreateUserC from "./CreateUser"
import {createUserFetching, getUserResponse} from "../common/selector";
import Phase from "../phases/Phase";
import {createUserRequest} from "./data/actions";
const {store} = redux;

class CreateUser extends Component{
    constructor(props) {
        super(props);
        this.state = {
            firstPhase: false,
            name: null,
            email: null,
        }
    }

    _nextPhase  (phases) {
        // this.setState({firstPhase: true})
        if(this.state.name && this.state.email)
            this.props.createUserRequest(this.state);
    }
    _onChangeHandler (e) {
        this.setState({[e.target.name] : e.target.value});
    };

    render(){
        return (
            (!this.props.getUserResponse ? (
                    <div>
                        <img className="logo" src="images/logo.png" alt="" />

                        <img className="oval-2" src="images/Oval-2.png" alt="" />

                        <div className="custom-container">
                            <h2>
                                UrAbility Tech Selector
                            </h2>

                            <h3 style={{marginBottom: '20px'}}>
                                Product Recommendation Application based on Decision Tree
                            </h3>

                            <img className="left" src="images/Oval-1.png" alt="" />

                            <img className="right" src="images/Oval-1.png" alt="" />

                            <img className="girl" src="images/girl.png" alt="" />

                            <img className="boy" src="images/boy.png" alt="" />

                            <div className="kt-portlet" style={{height: '530px'}}>

                                <h2>
                                    About Yourself
                                </h2>
                                {this.props.createUserFetching ?
                                    (<div className="spinner-grow textc" role="status" style={{color: '#88D34E !important', width: '50px', height: '50px', align: 'center', marginLeft: '46%', marginTop: '20%'}}>
                                    <span className="sr-only">Loading...</span>
                                </div>) :
                                    (<form className="kt-form">
                                    <div className="kt-portlet__body">
                                        <div className="kt-section kt-section--first">
                                            <div className="form-group">
                                                <label>Full Name:</label>
                                                <input type="text" className="form-control" name={'name'}
                                                       placeholder="Enter full name" onChange={(e) => this._onChangeHandler(e)} />
                                                <span className="form-text text-muted">Please enter your full name</span>
                                            </div>
                                            <div className="form-group">
                                                <label>Email address:</label>
                                                <input type="email" className="form-control" name={'email'} onChange={(e) => this._onChangeHandler(e)}
                                                       placeholder="Enter email" />
                                                <span className="form-text text-muted">We'll never share your email with anyone else</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div className="kt-portlet__foot">
                                        <div className="kt-form__actions">
                                            <div className="row">
                                                <div className="col-8 col-sm-6">
                                                </div>

                                                <div className="col-4 col-sm-6 text-right">
                                                    <button type="reset" className="btn btn-success" onClick={() => this._nextPhase(this.props.currentPhase)}>Next
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>)}
                            </div>
                        </div>
                    </div>

                ) : (<Phase />))
        )};
}

function mapStateToProps(state) {
    return {
        getUserResponse: getUserResponse(state),
        createUserFetching: createUserFetching(state)
    }
}

const mapDispatchToProps = {
    createUserRequest: createUserRequest
};

export default connect(mapStateToProps, mapDispatchToProps)(CreateUser);

// if (document.getElementById('phase')) {
//     ReactDOM.render(
//         <Provider store={store}>
//             <CreateUserC />
//         </Provider>, document.getElementById('phase'));
// }
