@extends('admin.Layout.app')
@section('title', 'Commandes')
@section('mini title', 'Commandes')
@section('adminContent')
    <div class="w-full flex flex-col">
        <table class="w-full text-center mt-4 h-10 overflow-y-auto">
            <thead>
                <tr>
                    <th class="bg-gray-200 py-2 rounded-tl-2xl">commande</th>
                    <th class="bg-gray-200 py-2 rounded-tr-2xl">Action</th>
                </tr>
            </thead>
            <tbody class="bg-gray-100">
                @forelse($commandes as $commande)
                    <tr class="hover:bg-slate-200">
                        <td class="py-4">{{ $marque->marque }}</td>
                        <td class="py-4 w-min">
                            <form action="{{route('commandes.destroy', $marque)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit">
                                    <svg width="40px" height="40px" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="bg-red-600 hover:bg-red-500 cursor-pointer p-2 rounded-xl hover:scale-90 transition-all duration-200">
                                        <path d="M10 11V17" stroke="#f6f3f4" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M14 11V17" stroke="#f6f3f4" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M4 7H20" stroke="#f6f3f4" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M6 7H12H18V18C18 19.6569 16.6569 21 15 21H9C7.34315 21 6 19.6569 6 18V7Z"
                                            stroke="#f6f3f4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M9 5C9 3.89543 9.89543 3 11 3H13C14.1046 3 15 3.89543 15 5V7H9V5Z"
                                            stroke="#f6f3f4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan='2' class='rounded-b-2xl p-2 font-bold'>pas des commandes</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

@endsection
