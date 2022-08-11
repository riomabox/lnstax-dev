<script>
    let counter = 0;
    async function incrementCounter(counter) {
        await firebase.database().ref('tools/').once('value').then((snapshot) => {
            var value = snapshot.val();
            $.each(value, function(index, value) {
                if (value) {
                    if (index === "counter") {
                        counter = value.nilai;
                        //console.log("inisiasi: " + counter);
                        const get_counter = counter;
                        var add_counter = +get_counter + 1;
                        //console.log("add: " + add_counter);
                        firebase.database()
                            .ref("tools/" + "counter")
                            .update({
                                nilai: +add_counter,
                            });
                        return +add_counter;
                    }
                }
            });
        });
    }
    incrementCounter(counter);
</script>