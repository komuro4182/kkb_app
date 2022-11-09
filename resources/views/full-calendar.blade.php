<x-app-layout>
    <div id="calendar" class="my-10"></div>

    <!-- モーダルエリアここから -->
    <section>
        <div id="modal-id"
            class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center">
            <div class="relative min-w-md my-6 mx-auto max-w-2xl w-full sm:w-1/2">
                <!--content-->
                <div
                    class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
                    <!--body-->
                    <form action="" method="POST" id="modal-form" class="relative p-6 flex-auto">
                        {{-- <input type="hidden" name="id" id="id">
                        <div class="my-4 text-slate-500 text-lg leading-relaxed">
                            <label for="all_day">{{ __('AllDay') }}</label>
                            <input type="checkbox" name="all_day" id="all_day">
                        </div>
                        <div class="my-4 text-slate-500 text-lg leading-relaxed">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="start">
                                {{ __('Event Start') }}
                            </label> --}}
                            <input type="date" name="start_date" id="start_date" required
                                class="shadow appearance-none border rounded w-auto py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            <input type="time" name="start_time" id="start_date"
                                class="shadow appearance-none border rounded w-auto py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        </div>
                        <div class="my-4 text-slate-500 text-lg leading-relaxed">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="start">
                                {{ __('Event End') }}
                            </label>
                            <input type="date" name="end_date" id="end_date" required
                                class="shadow appearance-none border rounded w-auto py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            <input type="time" name="end_time" id="end_date"
                                class="shadow appearance-none border rounded w-auto py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        </div>
                        <div class="my-4 text-slate-500 text-lg leading-relaxed">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="title">
                                {{ __('カテゴリー') }}
                            </label>
                            <input type="radio" name="title" id="title" required placeholder="イベント名"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            <input type="radio" name="title" id="title" required placeholder="イベント名"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        </div>
                        <div class="my-4 text-slate-500 text-lg leading-relaxed mb-2">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                                {{ __('Description') }}
                            </label>
                            <textarea name="body" id="body" placeholder="Description" required
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline h-32"></textarea>
                        </div>
                    </form>
                    <!--footer-->
                    <div class="flex items-center justify-between p-6 border-t border-solid border-slate-200 rounded-b">
                        <button type="button" id="add-button"
                            class="hidden bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                            {{ __('Create') }}
                        </button>
                        <button type="button" id="update-button"
                            class="hidden bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                            {{ __('更新') }}
                        </button>
                        <button type="button" id="cancel-button"
                            class="text-center text-gray-500 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                            {{ __('Cancel') }}
                        </button>
                        <button type="button" id="delete-button"
                            class="hidden bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                            {{ __('Delete') }}
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div id="modal-id-bg" class="hidden opacity-25 fixed inset-0 z-40 bg-black"></div>
    </section>
    <!-- モーダルエリアここまで -->
    <script src="{{ mix('js/calendar.js') }}"></script>
</x-app-layout>
