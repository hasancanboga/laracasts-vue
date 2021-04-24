class Errors {
    constructor() {
        this.errors = {};
    }

    has(field) {
        return this.errors.hasOwnProperty(field)
    }

    get(field) {
        if (this.errors[field]) {
            return this.errors[field][0]
        }
    }

    record(errors) {
        this.errors = errors
    }

    clear(field) {
        if (field) {
            delete this.errors[field];
            return;
        }
        this.errors = {};
    }

    any() {
        return Object.keys(this.errors).length > 0;
    }
}

class Form {
    constructor(data) {
        this.originalData = data;

        for (let field in data) { // so we can say form.name instead of form.data.name
            this[field] = data[field];
        }

        this.errors = new Errors();
    }

    data() {
        let data = Object.assign({}, this);

        delete data.originalData;
        delete data.errors;

        return data;
    }

    reset() {
        for (const field in this.originalData) {
            this[field] = '';
        }
    }

    submit(requestType, url) {
        axios[requestType](url, this.data())
            .then(this.onSuccess.bind(this)) // same as .then(response => this.onSuccess(response))
            .catch(this.onFail.bind(this))
    }

    onSuccess(response) {
        alert(response.data.message);
        this.errors.clear();
        this.reset();
    }

    onFail(error) {
        this.errors.record(error.response.data.errors)
    }
}

new Vue({
    el: '#app',
    data() {
        return {
            form: new Form({
                name: '',
                description: '',
            }),
        }
    },
    methods: {
        onSubmit() {
            this.form.submit('post', '/projects');
        }
    }
})