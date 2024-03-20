function sendMessage() {
    var userInput = document.getElementById("user-input").value;
    var chatBox = document.getElementById("chat-box");
    
    // Display user's message
    var userMessage = document.createElement("div");
    userMessage.className = "message user-message";
    userMessage.textContent = "You: " + userInput;
    chatBox.appendChild(userMessage);

    // Simulate bot typing before generating response
    simulateBotTyping(chatBox);

    // Generate and display bot's response
    setTimeout(function() {
        var botResponse = document.createElement("div");
        botResponse.className = "message bot-message";
        botResponse.innerHTML = generateBotResponse(userInput);
        chatBox.appendChild(botResponse);

        // Clear input field
        document.getElementById("user-input").value = "";

        // Scroll to the bottom of the chat box
        chatBox.scrollTop = chatBox.scrollHeight;
    }, getRandomDelay(1000, 3000)); // Add a random delay to simulate bot processing time
}

function generateBotResponse(userInput) {
    // Bot responses based on user input
    var response = "Bot: ";
    // Add sentiment analysis to determine the user's mood and respond accordingly
    var sentiment = analyzeSentiment(userInput);
    if (sentiment === "positive") {
        response += "I'm glad to hear that!";
    } else if (sentiment === "negative") {
        response += "I'm sorry to hear that. Is there anything I can do to help?";
    } else {
        response += "Thanks for sharing!";
    }

    // Add interactive media such as images or links
    response += "<br><img src='bot-image.jpg' alt='Bot Image'>";

    // Add agent assistant capabilities to provide additional information or suggestions
    response += "<br>For more information, you can visit our <a href='https://example.com'>website</a>.";

    // Add autonomous reasoning to provide personalized recommendations based on user's preferences
    if (userInput.toLowerCase().includes("recommend")) {
        response += "<br>Based on your interests, I recommend checking out our latest products!";
    }

    return response;
}

function simulateBotTyping(chatBox) {
    // Display typing indicator
    var typingIndicator = document.createElement("div");
    typingIndicator.className = "message bot-message";
    typingIndicator.textContent = "Bot is typing...";
    chatBox.appendChild(typingIndicator);
}

function analyzeSentiment(text) {
    // Placeholder function for sentiment analysis
    // Returns "positive", "negative", or "neutral" based on the sentiment of the text
    // This function can be replaced with a more sophisticated sentiment analysis algorithm
    return "neutral";
}

function getRandomDelay(min, max) {
    // Generate a random delay between min and max milliseconds
    return Math.floor(Math.random() * (max - min + 1)) + min;
}
