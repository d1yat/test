class Person {
	constructor(id, name) {
		this.id = id;
		this.name = name;
	}

	greeting() {
		return `Hello ${this.name}!`;
	}
}

module.exports = Person;