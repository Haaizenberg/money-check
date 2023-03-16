export default class Expenses {
    constructor() {
        this.initListeners();
        $('input[name=subject]').trigger('focus');
    }

    initListeners() {
        $('#add_expense_form').on('submit', (e) => {
            e.preventDefault();

            const money = $(e.target).find('input[name=money]').val();
            const subject = $(e.target).find('input[name="subject"]').val();
            $(e.target).find('.form-errors').empty();

            if (money === '' || subject === '') {
                this.showError('Не оставляй пустых полей, пожалуйста :)');
            } else {
                this.cleanErrors();

                window.axios.post($(e.target).attr('action'), {
                    'money': money,
                    'subject': subject,
                }).then(response => {
                    if (response.statusText === 'OK') {
                        location.reload();
                        $('input[name=subject], input[name=money]').val('');
                        $('input[name=subject]').trigger('focus');
                    }
                }).error(error => {
                    this.showError('Не оставляй пустых полей, пожалуйста :)');
                });
            }
        });
    }

    showError(errorText) {
        const errorBlock = $('.form-errors');
        errorBlock.empty();
        errorBlock.append(`<li>${errorText}</li>`);
        errorBlock.show();
    }

    cleanErrors() {
        const errorBlock = $('.form-errors');
        errorBlock.empty();
    }
}
