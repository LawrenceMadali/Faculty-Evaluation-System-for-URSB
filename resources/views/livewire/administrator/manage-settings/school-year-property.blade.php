<div>
    <div class="space-y-2">
    {{-------------------------------------------------- Success message for Created school year --------------------------------------------------}}
    <x-jet-action-message on="added" class="w-full text-white bg-green-500 rounded-lg ">
        <div class="container flex items-center justify-between px-6 py-4 mx-auto">
            <div class="flex items-center">
                <svg viewBox="0 0 40 40" class="w-6 h-6 fill-current text-white">
                    <path d="M20 3.33331C10.8 3.33331 3.33337 10.8 3.33337 20C3.33337 29.2 10.8 36.6666 20 36.6666C29.2 36.6666 36.6667 29.2 36.6667 20C36.6667 10.8 29.2 3.33331 20 3.33331ZM16.6667 28.3333L8.33337 20L10.6834 17.65L16.6667 23.6166L29.3167 10.9666L31.6667 13.3333L16.6667 28.3333Z"></path>
                </svg>

                <p class="mx-3 text-white">Added successfully.</p>
            </div>
        </div>
    </x-jet-action-message>
    {{-------------------------------------------------- Success message for Updated school year --------------------------------------------------}}
    <x-jet-action-message on="updated" class="w-full text-white bg-green-500 rounded-lg ">
        <div class="container flex items-center justify-between px-6 py-4 mx-auto">
            <div class="flex items-center">
                <svg viewBox="0 0 40 40" class="w-6 h-6 fill-current text-white">
                    <path d="M20 3.33331C10.8 3.33331 3.33337 10.8 3.33337 20C3.33337 29.2 10.8 36.6666 20 36.6666C29.2 36.6666 36.6667 29.2 36.6667 20C36.6667 10.8 29.2 3.33331 20 3.33331ZM16.6667 28.3333L8.33337 20L10.6834 17.65L16.6667 23.6166L29.3167 10.9666L31.6667 13.3333L16.6667 28.3333Z"></path>
                </svg>

                <p class="mx-3 text-white">Updated successfully.</p>
            </div>
        </div>
    </x-jet-action-message>
    {{-------------------------------------------------- Success message for Deleted school year --------------------------------------------------}}
    <x-jet-action-message on="deleted" class="w-full text-white bg-green-500 rounded-lg ">
        <div class="container flex items-center justify-between px-6 py-4 mx-auto">
            <div class="flex items-center">
                <svg viewBox="0 0 40 40" class="w-6 h-6 fill-current text-white">
                    <path d="M20 3.33331C10.8 3.33331 3.33337 10.8 3.33337 20C3.33337 29.2 10.8 36.6666 20 36.6666C29.2 36.6666 36.6667 29.2 36.6667 20C36.6667 10.8 29.2 3.33331 20 3.33331ZM16.6667 28.3333L8.33337 20L10.6834 17.65L16.6667 23.6166L29.3167 10.9666L31.6667 13.3333L16.6667 28.3333Z"></path>
                </svg>

                <p class="mx-3 text-white">Deleted successfully.</p>
            </div>
        </div>
    </x-jet-action-message>

    <div class="flex justify-start items-center">
        <x-jet-button wire:click.prevent="createOpenModal">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
            Add School Year
        </x-jet-button>
    </div>


    <div>
        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8 space-y-2">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"> School Year </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"> Created At </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"> Updated At </th>
                            <th scope="col" class="relative px-6 py-3">
                                <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @forelse ($sys as $sy)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap"> <div class="text-sm font-medium text-gray-900"> {{ $sy->school_year }} </div> </td>
                                <td class="px-6 py-4 whitespace-nowrap"> <div class="text-sm font-medium text-gray-900"> {{ $sy->created_at->ToFormattedDateString() }} </div> </td>
                                <td class="px-6 py-4 whitespace-nowrap"> <div class="text-sm font-medium text-gray-900"> {{ $sy->updated_at->ToFormattedDateString() }} </div> </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium space-x-2">
                                <button wire:click="editOpenModal({{$sy->id}})" class="text-indigo-600 hover:text-indigo-900">Edit</button>
                                <button wire:click="deleteOpenModal({{$sy->id}})" class="text-red-600 hover:text-red-900">Delete</button>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="4">
                                    <div class="flex justify-center items-center space-x-2">
                                        <svg class="w-6 h-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                                        <span class="text-xl text-gray-400 font-medium py-8">No results yet...</span>
                                    </div>
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <div>
                    {{ $sys->links() }}
                </div>
            </div>
            </div>
        </div>
    </div>

    {{-------------------------------------------------- Create Modal --------------------------------------------------}}
    <x-jet-dialog-modal wire:model.defer="createModal">
        <x-slot name="title">
            {{ __('Add School year') }}
        </x-slot>

        <x-slot name="content">
            <form wire:submit.prevent="create">
                <div class="col-span-6">
                    <label class="block text-sm font-medium text-gray-700">School Year</label>
                    <input wire:model.lazy="school_year" type="text" placeholder="e.g. 2020 - 2021" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                    <x-jet-input-error for="school_year"/>
                </div>
            </form>
        </x-slot>

        <x-slot name="footer">
            <x-jet-secondary-button wire:click="closeModal" wire:loading.attr="disabled">
                {{ __('Cancel') }}
            </x-jet-secondary-button>

            <x-jet-button class="ml-2" wire:click="create" wire:loading.attr="disabled">
                {{ __('Add') }}
            </x-jet-button>
        </x-slot>
    </x-jet-dialog-modal>

    {{-------------------------------------------------- Edit Modal --------------------------------------------------}}
    <x-jet-dialog-modal wire:model.defer="editModal">
        <x-slot name="title">
            {{ __('Edit School year') }}
        </x-slot>

        <x-slot name="content">
            <form wire:submit.prevent="update">
                <div class="col-span-6">
                    <label class="block text-sm font-medium text-gray-700">School Year</label>
                    <input wire:model.lazy="school_year" type="text" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                    <x-jet-input-error for="school_year"/>
                </div>
            </form>
        </x-slot>

        <x-slot name="footer">
            <x-jet-secondary-button wire:click="closeModal" wire:loading.attr="disabled">
                {{ __('Cancel') }}
            </x-jet-secondary-button>

            <x-jet-button class="ml-2" wire:click="update" wire:loading.attr="disabled">
                {{ __('Update') }}
            </x-jet-button>
        </x-slot>
    </x-jet-dialog-modal>

    {{-------------------------------------------------- Delete Modal --------------------------------------------------}}
    <x-jet-dialog-modal wire:model.defer="deleteModal">
        <x-slot name="title">
            {{ __('Delete School year') }}
        </x-slot>

        <x-slot name="content">
            {{ __('Are you sure you want to delete selected school year?') }}


        </x-slot>

        <x-slot name="footer">
            <x-jet-secondary-button wire:click="closeModal" wire:loading.attr="disabled">
                {{ __('Cancel') }}
            </x-jet-secondary-button>

            <x-jet-danger-button class="ml-2" wire:click="delete" wire:loading.attr="disabled">
                {{ __('Delete') }}
            </x-jet-danger-button>
        </x-slot>
    </x-jet-dialog-modal>

    </div>
</div>