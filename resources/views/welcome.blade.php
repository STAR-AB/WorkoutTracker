<x-layout >
    @dump($tasks)
    <h1>welcome {{ $person }}</h1>
    <ul>
        @foreach ($tasks as $task)
            <li>{{ $task }}</li>
        @endforeach
    </ul>
</x-layout>