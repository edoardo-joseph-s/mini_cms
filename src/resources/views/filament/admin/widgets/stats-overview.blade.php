<div class="grid grid-cols-1 gap-6 md:grid-cols-3">
    <x-filament::card>
        <div class="text-lg font-bold">{{ $userCount }}</div>
        <div class="text-sm text-gray-500">Users</div>
    </x-filament::card>
    <x-filament::card>
        <div class="text-lg font-bold">{{ $postCount }}</div>
        <div class="text-sm text-gray-500">Posts</div>
    </x-filament::card>
    <x-filament::card>
        <div class="text-lg font-bold">{{ $commentCount }}</div>
        <div class="text-sm text-gray-500">Comments</div>
    </x-filament::card>
</div>
<div class="grid grid-cols-1 gap-6 md:grid-cols-5">
    <x-filament::card class="text-white shadow-lg bg-gradient-to-br from-blue-500 to-blue-700">
        <div class="flex items-center gap-3">
            <div class="p-2 rounded-full bg-white/20">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a4 4 0 00-3-3.87M9 20h6M3 20h5v-2a4 4 0 013-3.87M6 8a6 6 0 1112 0A6 6 0 016 8z" /></svg>
            </div>
            <div>
                <div class="text-2xl font-bold">{{ $userCount }}</div>
                <div class="text-sm">Users</div>
            </div>
        </div>
    </x-filament::card>
    <x-filament::card class="text-white shadow-lg bg-gradient-to-br from-indigo-500 to-indigo-700">
        <div class="flex items-center gap-3">
            <div class="p-2 rounded-full bg-white/20">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21H5a2 2 0 01-2-2V7a2 2 0 012-2h14a2 2 0 012 2v12a2 2 0 01-2 2z" /></svg>
            </div>
            <div>
                <div class="text-2xl font-bold">{{ $postCount }}</div>
                <div class="text-sm">Posts</div>
            </div>
        </div>
    </x-filament::card>
    <x-filament::card class="text-white shadow-lg bg-gradient-to-br from-green-500 to-green-700">
        <div class="flex items-center gap-3">
            <div class="p-2 rounded-full bg-white/20">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8h2a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v11a2 2 0 002 2z" /></svg>
            </div>
            <div>
                <div class="text-2xl font-bold">{{ $commentCount }}</div>
                <div class="text-sm">Comments</div>
            </div>
        </div>
    </x-filament::card>
    <x-filament::card class="text-white shadow-lg bg-gradient-to-br from-yellow-500 to-yellow-700">
        <div class="flex items-center gap-3">
            <div class="p-2 rounded-full bg-white/20">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12v1m0 4v1m-4-5v1m0 4v1m-4-5v1m0 4v1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
            </div>
            <div>
                <div class="text-2xl font-bold">{{ $subscriberCount }}</div>
                <div class="text-sm">Subscribers</div>
            </div>
        </div>
    </x-filament::card>
    <x-filament::card class="text-white shadow-lg bg-gradient-to-br from-red-500 to-red-700">
        <div class="flex items-center gap-3">
            <div class="p-2 rounded-full bg-white/20">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V7a2 2 0 00-2-2H6a2 2 0 00-2 2v6m16 0a2 2 0 01-2 2H6a2 2 0 01-2-2m16 0V7a2 2 0 00-2-2H6a2 2 0 00-2 2v6m16 0a2 2 0 01-2 2H6a2 2 0 01-2-2" /></svg>
            </div>
            <div>
                <div class="text-2xl font-bold">{{ $contactCount }}</div>
                <div class="text-sm">Contact Messages</div>
            </div>
        </div>
    </x-filament::card>
</div>
</div>
