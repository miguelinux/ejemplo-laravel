@extends('layouts.app')


@section('content')

<x-alert2 type="warning">
  <x-slot name="titulo">
  Este es el titulo slot
  </x-slot>
  Este es el slot
</x-alert2>

<h1> Seccción nueva de conent</h1>

@endsection

<!-- vi: set shiftwidth=2 tabstop=2 expandtab: -->
