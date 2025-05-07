<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Smart Attendance System') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
<<<<<<< HEAD
            <div class="bg-white shadow-lg sm:rounded-lg p-6">

                <h3 class="text-lg font-medium text-gray-900 mb-4">{{ __('Your Activity Records') }}</h3>

                <!-- Search Bar -->
                <div class="mb-6">
                    <input id="search" type="text" aria-label="Search Activity Records" placeholder="Search..." 
                    class="block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 transition duration-150 ease-in-out" 
                    onkeyup="searchTable()">
                </div>

                <!-- Events Table -->
                <div class="overflow-x-auto">
                    <table class="table-auto w-full border-collapse border border-gray-300 rounded-lg shadow-lg" id="eventsTable">
                        <thead>
                            <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                <th class="border border-gray-300 px-6 py-3 text-left">{{ __('Activity') }}</th>
                                <th class="border border-gray-300 px-6 py-3 text-left">{{ __('Location') }}</th>
                                <th class="border border-gray-300 px-6 py-3 text-left">{{ __('Date') }}</th>
                                <th class="border border-gray-300 px-6 py-3 text-left">{{ __('Time') }}</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-700 text-sm">
                            @if ($events->isEmpty())
                                <tr>
                                    <td colspan="4" class="border border-gray-300 px-6 py-4 text-center text-gray-500">
=======
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <h3 class="text-lg font-medium text-gray-900 mb-4">{{ __('Your Activity Records') }}</h3>

                    <table class="table-auto w-full">
                        <thead>
                            <tr class="bg-gray-100">
                                <th class="border px-4 py-2">{{ __('Activity') }}</th>
                                <th class="border px-4 py-2">{{ __('Place') }}</th>
                                <th class="border px-4 py-2">{{ __('Time') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($activities->isEmpty())
                                <tr>
                                    <td colspan="3" class="border px-4 py-2 text-center text-gray-500">
>>>>>>> 878419c5d982f0a0daeb6e7fd480a38fc9e47c31
                                        {{ __('No record, guess it’s time to be productive?') }}
                                    </td>
                                </tr>
                            @else
<<<<<<< HEAD
                                @foreach ($events as $event)
                                    <tr class="bg-white hover:bg-gray-100 transition duration-150 ease-in-out border-b border-gray-200">
                                        <td class="border border-gray-300 px-6 py-4">{{ $event->event_name }}</td>
                                        <td class="border border-gray-300 px-6 py-4">{{ $event->location }}</td>
                                        <td class="border border-gray-300 px-6 py-4">{{ \Carbon\Carbon::parse($event->created_at)->format('d M Y') }}</td>
                                        <td class="border border-gray-300 px-6 py-4">{{ \Carbon\Carbon::parse($event->created_at)->format('H:i') }}</td>
=======
                                @foreach ($activities as $activity)
                                    <tr class="hover:bg-gray-50">
                                        <td class="border px-4 py-2">{{ $activity->activity }}</td>
                                        <td class="border px-4 py-2">{{ $activity->place }}</td>
                                        <td class="border px-4 py-2">{{ $activity->created_at }}</td>
>>>>>>> 878419c5d982f0a0daeb6e7fd480a38fc9e47c31
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
<<<<<<< HEAD
=======

>>>>>>> 878419c5d982f0a0daeb6e7fd480a38fc9e47c31
                </div>
            </div>
        </div>
    </div>
<<<<<<< HEAD

    <!-- JavaScript for Search -->
    <script>
        function searchTable() {
            const input = document.getElementById("search");
            const filter = input.value.toLowerCase();
            const table = document.getElementById("eventsTable");
            const rows = table.getElementsByTagName("tr");

            for (let i = 1; i < rows.length; i++) {
                const row = rows[i];
                const cells = row.getElementsByTagName("td");
                let found = false;

                for (let j = 0; j < cells.length; j++) {
                    const cell = cells[j];
                    if (cell) {
                        const textValue = cell.textContent || cell.innerText;
                        if (textValue.toLowerCase().indexOf(filter) > -1) {
                            found = true;
                            break;
                        }
                    }
                }

                row.style.display = found ? "" : "none";
            }
        }
    </script>
</x-app-layout>
=======
</x-app-layout>
>>>>>>> 878419c5d982f0a0daeb6e7fd480a38fc9e47c31
