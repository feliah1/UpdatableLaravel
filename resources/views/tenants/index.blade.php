<x-app-layout>
  
        <h2 class="font-semibold text-xl text-blue-600 leading-tight">
            {{ __('Tenants') }}
            <x-btn-link class="ml-4 float-right" href="{{ route('tenants.create')}}">
                Add New Tenants
            </x-btn-link>
        </h2>
    

    <div class="py-12">
    <table class="w-full text-sm text-left text-gray-700 dark:text-gray-300 bg-gray-200 dark:bg-gray-600">
                            <thead class="text-xs text-gray-800 uppercase bg-gray-300 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">Name</th>
                                    <th scope="col" class="px-6 py-3">Email</th>
                                    <th scope="col" class="px-6 py-3">Domain</th>
                                    <th scope="col" class="px-6 py-3">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($tenants as $tenant)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900">
                                                    {{$tenant->name}}
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="text-blue-500">
                                            {{$tenant->email}}
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="text-green-500">
                                            @foreach($tenant->domains as $domain)
                                            {{ $domain->domain }}{{ $loop->last ? '' : ',' }}
                                            @endforeach
                                        </span>
                                    </td>
                                    <td method="post" class="px-6 py-4 whitespace-nowrap">
                                    <form action="{{ route('tenants.destroy', $tenant->id) }}" method="post">
                                        @csrf
                                        @method('DELETE') 
                                        <input type="submit" class="btn btn-danger btn-sm" value="Delete"/>
                                    </form>

                                    <form action="{{ route('tenants.edit', $tenant->id) }}" method="get">
                                        @csrf
                                        <button type="submit">Edit</button>
                                    </form>


                                </tr>
                                @endforeach
                            </tbody>
                        </table>
    </div>
</x-app-layout>
