<x-layout>
    @if (session('success'))
        <div class="p-4 mb-4 text-sm text-blue-800 rounded-lg bg-blue-50  dark:text-blue-400" role="alert">
            <span class="font-medium">{{session('success')}}</span>
        </div>
    @endif
<h2 class='text-2xl my-5 '>Cat Table</h2>

<form action='/search' method="POST" class="mb-10">
    @csrf
    <div class="">
      <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Search</label>
      <input type="text" id="email" name='text' class="w-1/4 mb-3 bg-gray-50 border border-gray-600 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5  dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required>
    </div>

    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>

</form>

<div class="relative overflow-x-auto ">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500">
        <thead class="text-xs text-gray-700 uppercase ">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Breed
                </th>
                <th scope="col" class="px-6 py-3">
                    Age
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($cats as $cat)
                <tr class="bg-white text-dark  dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                        {{$cat->name}}
                    </th>
                    <td class="px-6 py-4">
                        {{$cat->breed}}
                    </td>
                    <td class="px-6 py-4">
                        {{$cat->age}}
                    </td>
                    <td class="px-6 py-4">
                        <a href="/getCat/{{$cat->id}}"><button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Edit</button></a>
 
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

</x-layout>
