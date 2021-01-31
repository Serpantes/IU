data = 'penaut butter';
test('the data is penaut butter', done => {
    function callback(data){
        try {
            expect(data).toBe('penaut butter');
            done()
        }catch (error){
            done(error);
        }
    }
    callback(data);
})