<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weight Gain - Result</title>
    <!-- Add your CSS styles here if needed -->
    <style>
         body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            text-align:center;
        }
    

h2 {
    color: #333;
}
        .user-input-content {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .user-input-content h2 {
            text-align: center;
            font-size: 24px;
            margin-bottom: 20px;
            color: #333;
        }

        form {
            margin-top: 20px;
        }

        label,
        select,
        input {
            display: block;
            margin-bottom: 15px;
            font-size: 16px;
        }

        input[type="number"],
        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
    <header>
        <!-- You can add a header here if needed -->
    </header>
    <main>
        <section class="result-content">
            <?php
            // Check if the form has been submitted
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Retrieve user input from the form
                $weight = $_POST["weight"];
                $height = $_POST["height"];
                $age = $_POST["age"];
                $gender = $_POST["gender"];

                // Determine the weight range and provide a diet plan accordingly
                if ($weight >= 30 && $weight < 60) {
                    // Diet plan for weight range 50-60 kg
                    echo "<h2>Your Weight Gain Plan (30-60 kg)</h2> <br>
                    Diet:

Breakfast:<br>

Scrambled eggs with spinach and tomatoes
Whole-grain toast
Greek yogurt with berries<br><br>
Lunch:<br>

Grilled chicken breast with quinoa and roasted vegetables
Mixed green salad with vinaigrette<br><br>
Snack:<br>

Almonds or walnuts
A piece of fruit (e.g., apple or banana)<br><br>
Dinner:<br>

Baked salmon with brown rice and steamed broccoli
Side of sautéed greens (e.g., kale or spinach)<br><br>
Exercise:<br>

Cardio: 30 minutes of brisk walking or cycling<br>
Strength training: Bodyweight exercises (e.g., push-ups, squats)";
                    // Display diet recommendations for this range
                } elseif ($weight >= 60 && $weight < 80) {
                    // Diet plan for weight range 60-70 kg
                    echo "<h2>Your Weight Gain Plan (60-80 kg)</h2><br>
                    Diet:

Breakfast:<br>

Scrambled eggs with spinach and mushrooms
Whole-grain toast
Fresh fruit salad<br><br>
Lunch:<br>

Grilled chicken or tofu with brown rice and steamed vegetables
Coleslaw with a light dressing<br><br>
Snack:<br>

Cottage cheese with pineapple
Handful of mixed nuts<br><br>
Dinner:<br>

Baked cod or lentil stew with quinoa
Steamed broccoli and carrots
Green salad with avocado<br><br>
Exercise:<br>

Cardio: 60 minutes of jogging or cycling<br>
Strength training: Compound exercises (e.g., deadlifts, bench presses)";
                    // Display diet recommendations for this range
                } elseif ($weight >= 80 && $weight < 100) {
                    // Diet plan for weight range 70-80 kg
                    echo "<h2>Your Weight Gain Plan (80-100 kg)</h2><br>
                    Diet:

Breakfast:<br>

Vegetable omelet with whole-grain toast
Low-fat Greek yogurt with honey<br><br>
Lunch:<br>

Grilled lean steak or tofu with sweet potato and grilled zucchini
Spinach and kale salad with nuts and berries<br><br>
Snack:<br>

Hummus with baby carrots and cucumber
Protein shake with almond milk<br><br>
Dinner:<br>

Baked salmon or chickpea curry with brown rice
Sautéed spinach and garlic<br><br>
Exercise:<br>

Cardio: 60 minutes of high-intensity interval training (HIIT)<br>
Strength training: Full-body workouts with weights";
                    // Display diet recommendations for this range
                } elseif ($weight >= 100 && $weight < 150) {
                    // Diet plan for weight range 80-90 kg
                    echo "<h2>Your Weight Gain Plan (100-150 kg)</h2><br>
                    Diet:

Breakfast:<br>

Protein pancakes with berries and Greek yogurt
Freshly squeezed orange juice<br><br>
Lunch:<br>

Grilled turkey or seitan (wheat protein) with quinoa and roasted vegetables
Mixed greens with avocado and vinaigrette<br><br>
Snack:<br>

Sliced bell peppers with hummus
Low-fat cottage cheese with pineapple<br><br>
Dinner:<br>

Grilled trout or tofu with couscous and steamed asparagus
Sautéed Swiss chard with garlic<br><br>
Exercise:<br>

Cardio: 60 minutes of intense cardio workouts (e.g., running, swimming)<br>
Strength training: Advanced weightlifting routines";
                    // Display diet recommendations for this range
                }  else {
                    // Handle cases outside of the specified weight ranges
                    echo "<p>Sorry, we don't have a diet plan for your weight range.</p>";
                }

                
            } else {
                // Handle the case where the form has not been submitted
                echo "<p>No data submitted.</p>";
            }
            ?>
        </section>
    </main>
   
</body>
</html>
