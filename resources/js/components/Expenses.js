export default class Expenses {
    constructor() {
        this.initListeners();
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
                errorBlock.hide();

                axios.post($(e.target).attr('action'), {
                    'money': money,
                    'subject': subject,
                }).then(response => {

                }).error(error => {
                    errorBlock.append('<li>Не оставляй пустых полей, пожалуйста :)</li>');
                    errorBlock.show();
                });
            }
        });
    }

    showError(errorText) {
        const errorBlock = $(e.target).find('.form-errors');
        errorBlock.empty();
        errorBlock.append(`<li>${errorText}</li>`);
        errorBlock.show();
    }
}