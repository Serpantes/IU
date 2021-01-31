const sum = require ('./sum');

test('2 plus 2 is 4', () => {
    expect(sum(2,2)).toBe(4);
});