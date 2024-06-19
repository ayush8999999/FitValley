<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fat Loss Diet</title>
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

        p {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>
    <?php
    // Check if the form has been submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve user input
        $weight = $_POST["weight"];

        // Determine the weight range and provide diet recommendations
        $dietRecommendations = "";

        if ($weight >= 30 && $weight < 80) {
            $dietRecommendations = "For your weight range (30-80 kg),<br> you can follow a diet plan that includes balanced meals with lean proteins, whole grains, and plenty of fruits and vegetables. Remember to control portion sizes<br><br>.
            Breakfast:<br>

Scrambled eggs with spinach and tomatoes.
Whole-grain toast.
A serving of Greek yogurt with berries.<br><br>
Mid-Morning Snack:<br>

A piece of fruit (e.g., apple or banana).
A small handful of almonds.<br><br>
Lunch:<br>

Grilled chicken or tofu salad with mixed greens, cucumber, and a vinaigrette dressing.
Quinoa or brown rice.<br><br>
Afternoon Snack:<br>

Carrot and celery sticks with hummus.
Green tea or herbal tea.<br><br>
Dinner:<br>

Baked salmon or grilled tempeh with steamed broccoli and asparagus.
A small portion of quinoa or sweet potatoes.<br><br>
Evening Snack (if needed):<br>

A small serving of cottage cheese or a low-fat yogurt.";
        } 
        
        elseif ($weight >= 80 && $weight < 90) {
            $dietRecommendations = "For your weight range (80-90 kg), focus on a diet with lean protein sources, complex carbohydrates, and a variety of colorful vegetables. Watch your calorie intake and stay hydrated.<br><br>
            Weight Range: 80-90 kg (Sample Diet Plan)<br><br>

Breakfast:<br>

Vegetable omelet with whole-grain toast.
A serving of mixed berries.<br><br>

Mid-Morning Snack:<br>

A piece of fruit (e.g., pear or orange).
A small handful of mixed nuts.<br><br>

Lunch:<br>

Lean beef or bean chili with a side salad.
Quinoa or whole-grain pasta.<br><br>

Afternoon Snack:<br>

Sliced cucumber and cherry tomatoes with tzatziki dip.
Herbal tea.<br><br>

Dinner:<br>

Grilled chicken or tofu stir-fry with mixed vegetables and brown rice.<br><br>

Evening Snack (if needed):<br>

A small serving of low-fat cottage cheese with pineapple.";
        }
        
        elseif ($weight >= 90 && $weight < 100) {
            $dietRecommendations = "For your weight range (90-100 kg), a balanced diet with lean proteins, whole grains, and regular exercise is important. Avoid excessive calorie intake and monitor portion sizes.<br>
            
            Weight Range: 90-100 kg (Sample Diet Plan)<br><br>

Breakfast:<br>

Overnight oats with almond butter and sliced banana.
A serving of low-fat Greek yogurt.<br><br>

Mid-Morning Snack:<br>

A piece of fruit (e.g., apple or grapes).
A small handful of walnuts.<br><br>

Lunch:<br>

Lentil soup with a side of mixed greens and a whole-grain roll.<br><br>

Afternoon Snack:<br>

Sliced bell peppers with hummus.
Green tea.<br><br>

Dinner:<br>

Baked cod or grilled tofu with roasted Brussels sprouts and quinoa.<br><br>

Evening Snack (if needed):<br>

A small serving of mixed berries with a dollop of yogurt.";
        } elseif ($weight >= 100 && $weight <= 150) {
            $dietRecommendations = "For your weight range (100-150 kg), aim for a diet rich in lean proteins, fiber, and essential nutrients. Ensure portion control and consider consulting a dietitian for personalized guidance. <br>
            
            Weight Range: 100-110 kg (Sample Diet Plan)<br><br>

Breakfast:

Whole-grain pancakes with fresh berries and a drizzle of honey.
A serving of low-fat cottage cheese.<br><br>

Mid-Morning Snack:<br>

A piece of fruit (e.g., mango or kiwi).
A small handful of cashews.<br><br>

Lunch:<br>

Turkey or bean and vegetable wrap with a side of mixed greens.<br><br>

Afternoon Snack:<br>

Sliced cucumber and cherry tomatoes with tzatziki dip.
Herbal tea.<br><br>

Dinner:<br>

Grilled lean steak or seitan with sautéed spinach and quinoa.<br><br>

Evening Snack (if needed):<br>

A small serving of sliced pineapple with a sprinkle of cinnamon.";
        } else {
            $dietRecommendations = "Please provide valid input.";
        }

        // Display the results
        echo "<h2>Fat Loss Diet Recommendations</h2>";
        echo "<p>$dietRecommendations</p>";
    }
    ?>
</body>
</html>
