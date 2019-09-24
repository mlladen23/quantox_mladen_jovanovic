const EmailRegEx        = /^[^@]+@[^@]{2,}\.[^@]{2,}$/;
const ValidationMethod  = [
    'required',
    'email',
    'match'
];

class Validator {
    constructor(form) {
        this.form   = form;
        this.submit = this.submit.bind(this);

        this.form.addEventListener('submit', this.submit);
    }

    submit(event) {
        let submit = true;

        event.preventDefault();

        for (let method of ValidationMethod) {
            let children = this.form.getElementsByClassName(method);

            for (let child of children) {
                if (!(this[method](child))) {
                    child.setAttribute('title', `Failed validation: ${method}`);
                    child.setAttribute('style', 'border: 1px solid red;');

                    submit = false;
                }
                else {
                    child.setAttribute('title', '');
                    child.setAttribute('style', '');
                }
            }
        }

        if (submit) {
            this.form.submit();
        }
    }

    required(element) {
        return (!(element.value === ''));
    }

    email(element) {
        return EmailRegEx.test(element.value.toLowerCase());
    }

    match(element) {
        let id      = element.getAttribute('data-match_id');
        let other   = document.getElementById(id);

        return (other.value == element.value);
    }
}

function Main() {
    let forms = document.getElementsByTagName('form');

    for (let form of forms) {
        let validator = new Validator(form);
    }
}

window.addEventListener('DOMContentLoaded', Main);