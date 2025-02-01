@extends('layouts.master')

@section('styles')
    <!-- Sweetalerts CSS -->
{{--    <link rel="stylesheet" href="{{asset('build/assets/libs/sweetalert2/sweetalert2.min.css')}}">--}}
@endsection

@section('content')
    <div class="main-content app-content px-5">
        <div class="container-fluid">
            <!-- Start::page-header -->
            <div class="flex items-center justify-between page-header-breadcrumb flex-wrap gap-2">
                <div>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item">
                            <a href="/">
                                Dashboards
                            </a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Brand Category</li>
                    </ol>
                </div>
                <div class="flex gap-2 flex-wrap">
                </div>
            </div>
        </div>
        <div class="box w-full">
            <div class="w-full flex justify-between items-center p-5 border-b">
                <div class="text-lg font-semibold ">Manage You Accounts</div>
                <div>
                    <a href="/authFacebook">
                        <a href="{{ route('brand_categories.create') }}" type="button"
                           class="ti-btn ti-btn-primary label-ti-btn">
                            <i class="ri-add-line label-ti-btn-icon  me-2"></i>
                            Add Account
                        </a>

                    </a>
                </div>
            </div>
            <div class="grid grid-cols-12 gap-x-6">
                <div class="xl:col-span-12 col-span-12">
                    <div class="box">
                        <div class="box-header justify-end">
                            <div class="flex flex-wrap gap-2">
                                <div class="ti-dropdown hs-dropdown">
                                    <a href="javascript:void(0);" class="ti-btn bg-light ti-btn-sm btn-wave"
                                       data-bs-toggle="dropdown" aria-expanded="false">
                                        Sort By<i class="ri-arrow-down-s-line align-middle ms-1 inline-block"></i>
                                    </a>
                                    <ul class="ti-dropdown-menu hs-dropdown-menu hidden" role="menu">
                                        <li><a class="ti-dropdown-item" href="javascript:void(0);">Newest</a></li>
                                        <li><a class="ti-dropdown-item" href="javascript:void(0);">Date Added</a></li>
                                        <li><a class="ti-dropdown-item" href="javascript:void(0);">A - Z</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="box-body p-0">
                            <div class="table-responsive whitespace-nowrap">
                                <table class="ti-custom-table ti-custom-table-head">
                                    <thead>
                                    <tr class="border-b !border-defaultborder dark:!border-defaultborder/10">
                                        <th scope="col">
                                            #
                                        </th>
                                        <th scope="col">Category</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($brandCategories as $index => $category)
                                        <tr class="crm-contact companies-list border-b !border-defaultborder dark:!border-defaultborder/10">
                                            <td class="companies-checkbox">
                                                {{$index + 1}}
                                            </td>
                                            <td>
                                                <div class="flex items-center gap-2">
                                                    <div class="leading-none">
                                                        <div class="rounded-xl">
                                                            <img src="{{ asset('storage/' . $category->image) }}"
                                                                 alt="Img"
                                                                 class="w-10 h-10 object-cover rounded-xl">
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <a data-bs-toggle="offcanvas"
                                                           data-hs-overlay="#offcanvasExample">{{$category->name}}</a>
                                                    </div>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="flex items-center flex-wrap gap-1">
                                                    <span class="">{!! \Illuminate\Support\Str::words($category->description, 8)!!}</span>
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="">
                                                    @if($category->is_active == 1 )
                                                        <span class="badge bg-success/10 text-success">Active</span>
                                                    @else
                                                        <span class="badge bg-danger/10 text-danger">Inactive</span>
                                                    @endif

                                                </div>
                                            </td>
                                            <td>
                                                <div class="btn-list flex items-center gap-x-2">
                                                    {{--                                                <a data-bs-toggle="offcanvas" data-hs-overlay="#offcanvasExample" class="ti-btn ti-btn-sm ti-btn-soft-primary ti-btn-icon"><i class="ri-eye-line"></i></a>--}}
                                                    <a href="{{ route('brand_categories.edit', $category) }}"
                                                       class="ti-btn ti-btn-sm ti-btn-soft-info ti-btn-icon"><i
                                                            class="ri-pencil-line"></i></a>


                                                    <form action="{{ route('brand_categories.destroy', $category) }}" method="POST" class="delete-form">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="button" class="ti-btn ti-btn-sm ti-btn-soft-primary2 ti-btn-icon contact-delete"
                                                                onclick="confirmDelete(this)">
                                                            <i class="ri-delete-bin-line"></i>
                                                        </button>
                                                    </form>


                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="box-footer border-t-0">
                            <div class="flex items-center">
                                <div>
                                    Showing {{ $brandCategories->firstItem() }} to {{ $brandCategories->lastItem() }}
                                    of {{ $brandCategories->total() }} Entries
                                </div>
                                <div class="ms-auto">
                                    <nav aria-label="Page navigation" class="pagination-style-4">
                                        {{ $brandCategories->links('pagination::tailwind') }}
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        function confirmDelete(button) {
            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    button.closest("form").submit(); // Submits the form if confirmed
                }
            });
        }
    </script>

@endsection
