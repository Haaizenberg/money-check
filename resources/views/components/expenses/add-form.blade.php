<div class="expenses__add-form">
    <form method="POST" action="{{ route('add-expense') }}" id="add_expense_form">
        @csrf
        <div class="input-group mb-3">
            <span class="input-group-text" id="money_label">Сколько</span>
            <input type="text" name="money" class="form-control" placeholder="Сумма" aria-label="Сумма" aria-describedby="money_label">
            <span class="input-group-text ms-1" id="subject_label">На что</span>
            <input type="text" name="subject" class="form-control" placeholder="Описание" aria-label="Описание" aria-describedby="subject_label">
            <button type="submit" class="btn btn-outline-light ms-3">Добавить</button>
        </div>
        <x-form-errors></x-form-errors>
    </form>
</div>