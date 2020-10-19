<?php


namespace App\Services;

use App\User;
use App\Models\Product;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\Storage;
use App\Services\ProductService;


class UserService
{
     protected $userRepository, $productService;

     public function __construct(UserRepository $userRepository, ProductService $productService){
         $this->userRepository = $userRepository;
         $this->productService = $productService;
     }

     public function updateOrCreate($data)
     {
         return $this->userRepository->updateOrCreate($data);
     }

     public function create($request)
     {
         return $this->userRepository->create($request);
     }
     public function getMail($id)
     {
         $user = $this->userRepository->find($id);
         $products = $this->productService->randomProducts();
         // Generate the PDF output.
         $output = PDF::loadView('urabilitypdf', compact('products'))->output();

         // The file name.
         $name = 'UrAbility Tech Selector -  Products.pdf';

         // Get our disk to store the PDF in.
         $disk = Storage::disk('public');

         // Save the file with the PDF output.
         if ($disk->put($name, $output)) {
             $fileName = $disk->path($name);
         }

         $user->notify(new \App\Notifications\UserReport($user, $fileName));
       }

      public function find($id){
         return $this->userRepository->find($id);
      }
}
