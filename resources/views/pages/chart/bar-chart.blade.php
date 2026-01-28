@extends('layouts.app')

@section('content')
    <x-common.page-breadcrumb pageTitle="Bar chart" />
    <div class="w-full space-y-6">
        <x-common.component-card title="Bar chart 1">
            <!-- ====== Bar Chart One Start -->
            <div class="custom-scrollbar max-w-full overflow-x-auto">
                <div id="chartOne" class="w-[1000px]"></div>
            </div>
            <!-- ====== Bar Chart One End -->
        </x-common.component-card>

        <x-common.component-card title="Bar chart 2">
            <!-- ====== Bar Chart Two Start -->
            <div class="custom-scrollbar max-w-full overflow-x-auto">
                <div id="chartSix" class="w-[1000px]"></div>
            </div>
            <!-- ====== Bar Chart Two End -->
        </x-common.component-card>
    </div>
@endsection
