@aware(['expenses'])

<div class="">
    <div class="expenses__list ms-3">
        @empty($expenses)
            <p>Тут пока ничего нет... :(</p>
        @endempty

        @foreach($expenses as $month => $monthExpenses)
            <div class="month-expenses">
                <h2 class="month-title">{{ \Carbon\Carbon::createFromDate(month: $month)->translatedFormat('F') }}</h2>
                @each ('components.expenses.expense', $monthExpenses, 'expense')
            </div>
        @endforeach

{{--        @each ('components.expenses.expense', $expenses, 'expense')--}}
        <hr>
        <div class="d-flex justify-content-end mb-3 expenses__sum">
            <div class=" ms-3">Итого за последний месяц: {{ $expenses->last()->sum('money') }} руб</div>
        </div>
    </div>
</div>
