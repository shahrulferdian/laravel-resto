@extends('layouts.main')

@section('con')
<div class="flex flex-1 flex-col mt-5">
    <div>
        <h1 class="text-white text-center text-3xl">Create :</h1>
    </div>
    <div class="flex flex-1 justify-center mt-2">
        <form action="{{ url('create') }}" method="POST">
            @csrf
            <input class="border-2 border-black rounded-lg" type="text" name="kategori" value="{{ old('kategori') }}" placeholder="Create">
            <button class="bg-white rounded-lg text-black px-3" type="submit">Save</button>
        </form>
    </div>
    <div class="mt-3 flex flex-1 justify-center">
        <table class="border-separate border border-slate-800 border-white">
            <thead>
                <tr>
                    <th class="border border-slate-600 border-white text-white px-5">No</th>
                    <th class="border border-slate-600 border-white text-white px-9">Name</th>
                    <th class="border border-slate-600 border-white text-white px-9">Action</th>
                    <th class="border border-slate-600 border-white text-white">Edit</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                <tr>
                    <td class="border border-slate-700 border-white text-white"> {{ $loop->iteration }}</td>
                    <td class="border border-slate-700 border-white text-white">{{ $item->kategori }}</td>
                    <td class="border border-slate-700 border-white text-white">
                        <form action="{{ url('delete', $item->id) }}" method="POST">
                        @method('delete')
                        @csrf
                        <button class="mx-7 bg-red-600 rounded-lg text-white px-5" onclick="return confirm('Delete this name? ( {{ $item->kategori }} )')">Del</button>
                        </form>
                    </td>
                    <td class="border border-slate-700 border-white text-white">
                        <form action="{{ url('edit',$item->id) }}" method="POST">
                            @method('put')
                            @csrf
                            <input class="border-2 border-black rounded-lg text-black" type="text" name="kategori" value="{{ old('kategori',$item->kategori) }}">
                            <button class="bg-white rounded-lg text-black px-3" type="submit">Save</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
