<x-app-layout>
    
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('TENANTS') }}
        </h2>
    

    <div >
    <x-btn-link href="{{ route('tenants.index')}}" class="noloona">
                        View List Of Tenants</x-btn-link> 
    </div>
</x-app-layout>
