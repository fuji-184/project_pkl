<x-app-layout>
    <x-slot name="header">
        {{ __('Users') }}
    </x-slot>

    <div class="p-4 bg-white rounded-lg shadow-xs">

        <div class="inline-flex overflow-hidden mb-4 w-full bg-white rounded-lg shadow-md">
            <div class="flex justify-center items-center w-12 bg-blue-500">
                <svg class="w-6 h-6 text-white fill-current" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20 3.33331C10.8 3.33331 3.33337 10.8 3.33337 20C3.33337 29.2 10.8 36.6666 20 36.6666C29.2 36.6666 36.6667 29.2 36.6667 20C36.6667 10.8 29.2 3.33331 20 3.33331ZM21.6667 28.3333H18.3334V25H21.6667V28.3333ZM21.6667 21.6666H18.3334V11.6666H21.6667V21.6666Z"></path>
                </svg>
            </div>

            <div class="px-4 py-2 -mx-3">
                <div class="mx-3">
                    <span class="font-semibold text-blue-500">Info</span>
                    <p class="text-sm text-gray-600">Sample table page</p>
                </div>
            </div>
        </div>
        










        

<div x-data="{ open: false }" class="">
    <div class="mt-1 w-40">
        <button @click="open = true" class="flex items-center rounded text-black text-sm bg-white bg-opacity-25 border border-white border-opacity-50 shadow space-x-1 px-3 py-2">
            Tambah
        </button>
    </div>
    <div x-transition="" x-show="open === true" class="flex justify-center items-center p-5 fixed inset-0 bg-black bg-opacity-50 z-50" style="display: none;">
        <div @click.outside="open = false" class="flex flex-col relative max-w-2xl w-full rounded-lg shadow-lg p-12 bg-white">
          
            <form action="{{ route('users.store') }}" method="POST">
    @csrf
              <input name="name" class="w-full" type="text" placeholder="Nama...."/>
              <input name="email" class="w-full" type="email" placeholder="Email...."/>
<input name="password" class="w-full" type="text" placeholder="Password...."/>
              
                <button type="submit" @click="open = false" class="text-sm bg-blue-500 bg-opacity-25 text-blue-500 p-2 rounded-sm shadow-sm w-full my-3">
                    Submit
                </button>
            
            </form>

<button @click="open = false" class="text-sm bg-red-500 bg-opacity-25 text-red-400 p-2 rounded-sm shadow-sm">
  
                    Oh No
                </button>
                
        </div>
    </div>
</div>
        


        <div class="overflow-hidden mb-8 w-full rounded-lg border shadow-xs">
          
            <div class="overflow-x-auto w-full">
                <table class="w-full whitespace-no-wrap">
                    <thead>
                    <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase bg-gray-50 border-b">
                        <th class="px-4 py-3">Name</th>
                        <th class="px-4 py-3">Email</th>
                        <th class="px-4 py-3">Menu</th>
                    </tr>
                    </thead>
                    <tbody class="bg-white divide-y">
                    @foreach($users as $user)
                        <tr class="text-gray-700">
                            <td class="px-4 py-3 text-sm">
                                {{ $user->name }}
                            </td>
                            <td class="px-4 py-3 text-sm">
                                {{ $user->email }}
                            </td>
                            <td class="px-4 py-3 text-sm flex">
                              
                              
                              
<div x-data="{ open: false }" class="">
    <div class="mt-1 ">
        <button @click="open = true" class="flex items-center rounded text-black text-sm bg-white bg-opacity-25 border border-white border-opacity-50 shadow space-x-1 px-3 py-2">
            Open dialog
        </button>
    </div>
    <div x-transition="" x-show="open === true" class="flex justify-center items-center p-5 fixed inset-0 bg-black bg-opacity-50 z-50" style="display: none;">
        <div @click.outside="open = false" class="flex flex-col relative max-w-2xl w-full rounded-lg shadow-lg p-12 bg-white">
          
            <form>
              <input class="w-full" type="text"/>
            
                <button type="submit" @click="open = false" class="text-sm bg-blue-500 bg-opacity-25 text-blue-500 p-2 rounded-sm shadow-sm w-full my-3">
                    Submit
                </button>
            
            </form>

<button @click="open = false" class="text-sm bg-red-500 bg-opacity-25 text-red-400 p-2 rounded-sm shadow-sm">
  
                    Oh No
                </button>
                
        </div>
    </div>
</div>







<div x-data="{ open: false }" class="">
    <div class="mt-1">
        <button @click="open = true" class="flex items-center rounded text-black text-sm bg-white bg-opacity-25 border border-white border-opacity-50 shadow space-x-1 px-3 py-2">
            Hapus
        </button>
    </div>
    <div x-transition="" x-show="open === true" class="flex justify-center items-center p-5 fixed inset-0 bg-black bg-opacity-50 z-50" style="display: none;">
        <div @click.outside="open = false" class="flex flex-col relative max-w-2xl w-full rounded-lg shadow-lg p-12 bg-white">
          
            <form action="{{ route('users.delete',$user->id) }}" method="POST">
    @csrf
    @method('DELETE')
              <input class="w-full" type="text"/>
            
                <button type="submit" @click="open = false" class="text-sm bg-blue-500 bg-opacity-25 text-blue-500 p-2 rounded-sm shadow-sm w-full my-3">
                    Submit
                </button>
            
            </form>

<button @click="open = false" class="text-sm bg-red-500 bg-opacity-25 text-red-400 p-2 rounded-sm shadow-sm">
  
                    Oh No
                </button>
                
        </div>
    </div>
</div>

                              
                              
                              
                              
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase bg-gray-50 border-t sm:grid-cols-9">
                {{ $users->links() }}
            </div>
        </div>

    </div>
</x-app-layout>
