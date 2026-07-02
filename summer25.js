// Daily calorie goal
const goal = 2000;

// Variables to store total calories and entry count
let total = 0;
let count = 0;

function addCalories() {

    // Get calorie input from the user
    let calorie = Number(document.getElementById("calorie").value);

    // Check if the input is valid
    if (calorie <= 0) {
        alert("Enter valid calories.");
        return;   
    }

    // Add calories to the running total
    total += calorie;

    // Increase the number of entries
    count++;

    // Display the total calories
    document.getElementById("total").innerText =
        "Total Calories: " + total;

    // Display progress toward the daily goal
    document.getElementById("goal").innerText =
        "Goal Progress: " + total + " / " + goal;

    // Display the total number of entries
    document.getElementById("entries").innerText =
        "Entries: " + count;

    // Variable to store the feedback message
    let message = "";

    // Check total calories and set feedback
    if (total <= 800)
        message = "You're off to a healthy start!";
    else if (total <= 1600)
        message = "Good progress, keep it balanced!";
    else if (total <= 1999)
        message = "Almost at your limit!";
    else
        message = "Goal reached! Stay mindful!";

    // Special condition:
    // More than 10 entries but goal not reached
    if (count > 10 && total < goal)
        message = "Be cautious of frequent snacking!";

    // Display the feedback message
    document.getElementById("feedback").innerText =
        "Feedback: " + message;

    // Clear the input field for the next entry
    document.getElementById("calorie").value = "";
}