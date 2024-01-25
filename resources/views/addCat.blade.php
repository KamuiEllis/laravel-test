<x-layout>
    <h2 class='text-2xl mt-5 '>Add Cat</h2>
    <small>Enter cat's information</small>



    
    @if (session('success'))
        <div class="p-4 mb-4 text-sm text-blue-800 rounded-lg bg-blue-50  dark:text-blue-400" role="alert">
            <span class="font-medium">{{session('success')}}</span>
        </div>
    @endif

<form class="max-w-sm " action='/postCat' method="POST">
    @csrf
    <div class="">
      <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
      <input type="text" id="email" name='name' class="bg-gray-50 border border-gray-600 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="bubbles" required>
      <small>Enter cat's name</small>
    </div>
    <div class="">
      <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Breed</label>
      <input type="text" id="password" name='breed' class="bg-gray-50 border border-gray-600 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="British Shorthair, maine coon" required>
      <small>Enter cat's breed</small>
    </div>

      <div class="">
        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Age</label>
        <input type="number" id="password" name='age' class="bg-gray-50 border border-gray-600 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500"  required>
        <small>Enter cat's age</small>
      </div>

      <div class="">
        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Location</label>
        <input type="text" id="password" name='location' class="bg-gray-50 border border-gray-600 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
        <small>Enter cat's location</small>
      </div>

      <div class="mb-10">
        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
        <textarea name='description'  class="bg-gray-50 border border-gray-600 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
        <small>Enter cat's description</small>
      </div>
   
    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
  </form>
  
      
  
</x-layout>