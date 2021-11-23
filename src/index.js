const Person = require('../js/person.js');

const users = [
	new Person(101, 'Ahmad Fasehan'),
	new Person(102, 'Andris Firmansyah'),
	new Person(103, 'Akhirudin Sudiyat'),
	new Person(104, 'Bani Arham'),
	new Person(105, 'Rido Raudho'),
];

for (const user of users) {
	if (user.id === 103) {
		console.log('Hey now brown cow');
		continue;
	}
	
	console.log(`(${user.id}) => ${user.greeting()}`);
}

const numbers = [1, 2, 3, 4, 5];
const index = numbers.indexOf(3);

console.log(index);