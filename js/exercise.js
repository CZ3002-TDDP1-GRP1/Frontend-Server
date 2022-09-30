async function getAllExerciseHandler() {
    try {     
        const response = await fetch('http://localhost:8080/exercise', {
          method: 'get'
        });
        const results = await response.json();
        console.log('Completed!', results);
        //alert(results);
      } catch(err) {
        console.error(`Error: ${err}`);
      };    
}