@extends('layouts.admin')

@section('title', 'Portfolios')

@section('content')
@include('layouts.admin.breadcrumb', ['route' => route('portfolios.create')])

    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
        <div class="card-body">
            <h4 class="card-title">Striped Table</h4>
            <p class="card-description">
            Add class <code>.table-striped</code>
            </p>
            <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>{{ __('Image') }}</th>
                    <th>{{ __('Title') }}</th>
                    <th>{{ __('Description') }}</th>
                    <th>{{ __('Date') }}</th>
                </tr>
                </thead>
                <tbody>
                @foreach($portfolios as $portfolio)
                    <tr>
                        <td class="py-1">
                            @if($portfolio->images->first())
                             <img src="{{ asset($portfolio->images->first()->src) }}" alt="image" />
                            @endif
                        </td>
                        <td><a href="{{ route('portfolios.edit', $portfolio->id) }}">{{ $portfolio->name }}</a></td>
                        <td>{{ $portfolio->description }}</td>
                        <td>{{ $portfolio->date }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            </div>
        </div>
        </div>
    </div>
@endsection
