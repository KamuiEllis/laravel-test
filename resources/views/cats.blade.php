<x-layout>
    
<h2 class='text-2xl my-5 mx-5'>Cat Table</h2>
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
