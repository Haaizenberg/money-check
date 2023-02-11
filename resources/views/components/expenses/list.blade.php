@aware(['expenses'])

<div class="">
    <div class="expenses__list ms-3">
        @empty($expenses)
            <p>Тут пока ничего нет... :(</p>
        @endempty
        @each ('components.expenses.expense', $expenses, 'expense')
        <hr>
        <div class="d-flex justify-content-end mb-3 expenses__sum">
            <div class=" ms-3">Итого: {{ $expenses->sum('money') }} руб</div>
        </div>
    </div>
</div>