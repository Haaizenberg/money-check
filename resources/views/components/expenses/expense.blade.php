<div class="mb-3 d-flex expense">
    <div class="w-25 expense__date">{{ $expense->updated_at->translatedFormat('j F, l') }}</div>
    <div class="w-50 ms-3 expense__subject">{{ $expense->subject }}</div>
    <div class="w-25 ms-3 text-end expense__money">{{ $expense->money }} руб</div>
</div>
