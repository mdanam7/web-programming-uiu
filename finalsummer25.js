// Daily calorie goal
const dailyGoal = 2000;

// Variables
let totalCalories = 0;
let entries = 0;

// Function to add calories
function addCalories() {

    // Get user input
    let calories = Number(document.getElementById("calorieInput").value);

    // Check valid input
    if (calories <= 0 || isNaN(calories)) {
        alert("Please enter valid calories!");
        return;
    }

    // Add calories to total
    totalCalories += calories;

    // Increase entry count
    entries++;

    // Display total calories
    document.getElementById("totalCalories").innerText =
        "Total Calories: " + totalCalories;

    // Display entry count
    document.getElementById("entryCount").innerText =
        "Entries: " + entries;

    // Progress percentage
    let progress = (totalCalories / dailyGoal) * 100;

    document.getElementById("goalProgress").innerText =
        "Goal Progress: " + progress.toFixed(2) + "%";

    // Feedback messages
    let message = "";

    if (totalCalories >= 0 && totalCalories <= 800) {
        message = "You’re off to a healthy start!";
    }
    else if (totalCalories >= 801 && totalCalories <= 1600) {
        message = "Good progress, keep it balanced!";
    }
    else if (totalCalories >= 1601 && totalCalories <= 1999) {
        message = "Almost at your limit!";
    }
    else if (totalCalories >= 2000) {
        message = "Goal reached! Stay mindful!";
    }

    // Extra condition
    if (entries > 10 && totalCalories < dailyGoal) {
        message = "Be cautious of frequent snacking!";
    }

    // Display feedback
    document.getElementById("feedback").innerText =
        "Feedback: " + message;

    // Clear input field
    document.getElementById("calorieInput").value = "";
}