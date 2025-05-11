<div class="modal fade" id="delete_all" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{ __('modals.Delete Items') }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>{{ __('modals.Are you sure you want to delete?') }}</p>
                <form id="delete_all_form" action="" method="POST">
                    {{ csrf_field() }}
                    <input type="hidden" id="delete_all_id" name="delete_all_id" value="">
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" id="btn_confirm_delete">{{ __('modals.Confirm Delete') }}</button>
                <button
                    type="reset"
                    class="btn btn-label-danger"
                    data-bs-dismiss="modal"
                    aria-label="Close">
                    {{ __('modals.Cancel') }}
                </button>
            </div>
        </div>
    </div>
</div>
