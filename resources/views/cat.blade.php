<x-layout>
    <h2 class='text-2xl mt-5 '>Edit Cat</h2>
    <small>Enter cat's information</small>



    
    @if (session('success'))
        <div class="p-4 mb-4 text-sm text-blue-800 rounded-lg bg-blue-50  dark:text-blue-400" role="alert">
            <span class="font-medium">{{session('success')}}</span>
        </div>
    @endif

<form class="max-w-sm" action='/editCat/{{$cat->id}}' method="POST">
    @method('PUT')
    @csrf
    <div class="">
      <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
      <input type="text" id="email" name='name' value={{$cat->name}} class="bg-gray-50 border border-gray-600 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="bubbles" required>
      <small>Enter cat's name</small>
    </div>
    <div class="">
      <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Breed</label>
      <input type="text" id="password" name='breed' value={{$cat->breed}} class="bg-gray-50 border border-gray-600 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="British Shorthair, maine coon" required>
      <small>Enter cat's breed</small>
    </div>

      <div class="">
        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Age</label>
        <input type="number" id="password" value={{$cat->age}} name='age' class="bg-gray-50 border border-gray-600 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500"  required>
        <small>Enter cat's age</small>
      </div>

      <div class="">
        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Location</label>
        <input type="text" id="password" name='location' value={{$cat->location}} class="bg-gray-50 border border-gray-600 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
        <small>Enter cat's location</small>
      </div>

      
      <div class="mb-10">
        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
        <textarea name='description' class="bg-gray-50 border border-gray-600 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500">{{$cat->description}}</textarea>
        <small>Enter cat's description</small>
      </div>
   
    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
  </form>

  <form class="max-w-sm" action='/deleteCat/{{$cat->id}}' method="POST">
    @method('DELETE')
    @csrf
    

<!-- Modal toggle -->
<button data-modal-target="default-modal" data-modal-toggle="default-modal" class="mt-3  text-gray-500 bg-white hover:bg-red-100 focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-red-700 dark:text-white text-white  dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-gray-600" type="button">
    Delete
  </button>
  
  <!-- Main modal -->
  <div id="default-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
      <div class="relative p-4 w-full max-w-2xl max-h-full">
          <!-- Modal content -->
          <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
              <!-- Modal header -->
              <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                  <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                      ARE YOU SURE?
                  </h3>
                  <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="default-modal">
                      <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                      </svg>
                      <span class="sr-only">Close modal</span>
                  </button>
              </div>
              <!-- Modal body -->
              <div class="p-4 md:p-5 space-y-4">
                  <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                    This action is irreversible.
                </p>
              </div>
              <!-- Modal footer -->
              <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                <button type="submit" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">DELETE!!</button>
                <button data-modal-hide="default-modal" type="button" class="ms-3 text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Cancel</button>
              </div>
          </div>
      </div>
  </div>
  
  </form>
</x-layout>