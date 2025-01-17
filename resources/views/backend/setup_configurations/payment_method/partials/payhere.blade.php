<form class="form-horizontal" action="{{ route('payment_method.update') }}" method="POST">
    @csrf
    <input type="hidden" name="payment_method" value="payhere">
    <div class="form-group row">
        <input type="hidden" name="types[]" value="PAYHERE_MERCHANT_ID">
        <div class="col-md-4">
            <label class="col-from-label">{{ translate('PAYHERE MERCHANT ID') }}</label>
        </div>
        <div class="col-md-8">
            <input type="text" class="form-control" name="PAYHERE_MERCHANT_ID"
                value="{{ env('PAYHERE_MERCHANT_ID') }}"
                placeholder="{{ translate('PAYHERE MERCHANT ID') }}" required>
        </div>
    </div>
    <div class="form-group row">
        <input type="hidden" name="types[]" value="PAYHERE_SECRET">
        <div class="col-md-4">
            <label class="col-from-label">{{ translate('PAYHERE SECRET') }}</label>
        </div>
        <div class="col-md-8">
            <input type="text" class="form-control" name="PAYHERE_SECRET"
                value="{{ env('PAYHERE_SECRET') }}"
                placeholder="{{ translate('PAYHERE SECRET') }}" required>
        </div>
    </div>
    <div class="form-group row">
        <input type="hidden" name="types[]" value="PAYHERE_CURRENCY">
        <div class="col-md-4">
            <label class="col-from-label">{{ translate('PAYHERE CURRENCY') }}</label>
        </div>
        <div class="col-md-8">
            <input type="text" class="form-control" name="PAYHERE_CURRENCY"
                value="{{ env('PAYHERE_CURRENCY') }}"
                placeholder="{{ translate('PAYHERE CURRENCY') }}" required>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-4">
            <label class="col-from-label">{{ translate('Payhere Sandbox Mode') }}</label>
        </div>
        <div class="col-md-8">
            <label class="aiz-switch aiz-switch-success mb-0">
                <input value="1" name="payhere_sandbox" type="checkbox"
                    @if (get_setting('payhere_sandbox') == 1) checked @endif>
                <span class="slider round"></span>
            </label>
        </div>
    </div>
    <div class="form-group mb-0 text-right">
        <button type="submit" class="btn btn-sm btn-primary">{{ translate('Save') }}</button>
    </div>
</form>
