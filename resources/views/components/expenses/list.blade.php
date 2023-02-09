@aware(['expenses'])

<div class="expenses__list ms-3">
    @empty($expenses)
        <p>Тут пока ничего нет... :(</p>
    @endempty
    @each ('expenses.expense', $expenses, 'expense')
</div>