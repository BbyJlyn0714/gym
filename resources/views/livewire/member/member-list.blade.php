@push('styles')
<style>
    .table {
        color: #666;
        font-size: 0.9rem;
    }

    .table thead th {
        background-color: #f4f6f9;
        color: #333;
    }

    .table td, .table th {
        padding: 8px; /* More padding for better readability */
    }

    .table td {
        border-top: 1px solid #dee2e6;
    }

    .btn-xs {
        padding: 5px 10px;
        font-size: 0.8rem; /* Smaller font size for buttons in a table */
    }
</style>
@endpush

<div wire:ignore>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Members</h3>
            <div class="card-tools">
                <a href="" class="btn btn-primary">Add New Member</a>
            </div>
        </div>
        <div class="card-body">
            <table id="example" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($members as $member)
                        <tr>
                            <td>{{ $member->full_name }}</td>
                            <td>{{ $member->email }}</td>
                            <td>{{ $member->phone }}</td>
                            <td>
                                <a href="" class="btn btn-xs btn-info" title="Edit" data-toggle="tooltip" data-placement="top" title="Edit Member">
                                    <i class="fas fa-pencil-alt"></i>
                                </a>
                                <button wire:click="" class="btn btn-xs btn-danger" title="Remove" data-toggle="tooltip" data-placement="top" title="Remove Member">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center">No Members Found</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

@push('scripts')
<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip();
    });

    $(document).ready(function() {
        $('#example').DataTable({
            "responsive": true,
            "autoWidth": false,
            "columns": [
                null, // Assumes first three columns should adjust automatically
                null,
                null,
                { "width": "7.5%" } // Adjusts the width of the fourth column
            ]
        });
    });
</script>
@endpush
