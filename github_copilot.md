make a webpage with the SUBSCRIBE text
```
<!DOCTYPE html>
<html>
    <head>
        <title>Subscribe</title>
    </head>
    <body>
        <h1>SUBSCRIBE</h1>
    </body>
</html>
```

// Todo form component with tailwind classes
// create todo state
// create todo state and addTodo function
// define emits with event onAdded
// define props
// import Todo component
// create a ref for the todo
// create function addTodo which emits onAdded event
// make a vertically and horizontally centered div

// Begin by defining the initial state
```
data()
```
    // setup is a function that returns an object
    // with the properties we want to track

    // Create a reactive variable
```
    let age = ref(0)
```
    // Create a computed variable
```
    let agePlusOne = computed(() => age.value + 1)
```
    // Create a method
```
    function increment() {
        age.value++
    }
```
    // Return the reactive variables and functions
```
    return { age, agePlusOne, increment }
```