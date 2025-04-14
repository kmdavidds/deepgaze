# DeepGaze API Documentation

## Overview

DeepGaze is a web application built with Laravel, designed to provide a robust and scalable API for managing educational content, user interactions, and assessments. This document outlines the structure and functionality of the API controllers within the application.

## API Controllers

The following controllers are available in the `Api` namespace:

### 1. **AnswerController**
    - **Purpose**: Manage answers to questions.
    - **Endpoints**:
      - `GET /answers`: List all answers (paginated).
      - `POST /answers`: Create a new answer.
      - `GET /answers/{id}`: Retrieve a specific answer.
      - `PUT /answers/{id}`: Update an existing answer.
      - `DELETE /answers/{id}`: Delete an answer.

### 2. **AuthController**
    - **Purpose**: Handle user authentication.
    - **Endpoints**:
      - `POST /register`: Register a new user.
      - `POST /login`: Log in a user and generate an access token.
      - `POST /logout`: Log out the current user.

### 3. **ChapterController**
    - **Purpose**: Manage chapters within classrooms.
    - **Endpoints**:
      - `GET /chapters`: List all chapters (paginated).
      - `POST /chapters`: Create a new chapter.
      - `GET /chapters/{id}`: Retrieve a specific chapter.
      - `PUT /chapters/{id}`: Update an existing chapter.
      - `DELETE /chapters/{id}`: Delete a chapter.

### 4. **ChapterAttemptController**
    - **Purpose**: Track user attempts on chapters.
    - **Endpoints**:
      - `GET /chapter-attempts`: List all chapter attempts (paginated).
      - `POST /chapter-attempts`: Create a new chapter attempt.
      - `GET /chapter-attempts/{id}`: Retrieve a specific chapter attempt.
      - `PUT /chapter-attempts/{id}`: Update an existing chapter attempt.
      - `DELETE /chapter-attempts/{id}`: Delete a chapter attempt.

### 5. **ClassroomController**
    - **Purpose**: Manage classrooms.
    - **Endpoints**:
      - `GET /classrooms`: List all classrooms (paginated).
      - `POST /classrooms`: Create a new classroom.
      - `GET /classrooms/{id}`: Retrieve a specific classroom.
      - `PUT /classrooms/{id}`: Update an existing classroom.
      - `DELETE /classrooms/{id}`: Delete a classroom.

### 6. **CorrectAnswerController**
    - **Purpose**: Manage correct answers for questions.
    - **Endpoints**:
      - `GET /correct-answers`: List all correct answers (paginated).
      - `POST /correct-answers`: Create a new correct answer.
      - `GET /correct-answers/{id}`: Retrieve a specific correct answer.
      - `PUT /correct-answers/{id}`: Update an existing correct answer.
      - `DELETE /correct-answers/{id}`: Delete a correct answer.

### 7. **QuestionController**
    - **Purpose**: Manage questions within chapters.
    - **Endpoints**:
      - `GET /questions`: List all questions (paginated).
      - `POST /questions`: Create a new question.
      - `GET /questions/{id}`: Retrieve a specific question.
      - `PUT /questions/{id}`: Update an existing question.
      - `DELETE /questions/{id}`: Delete a question.

### 8. **UserAnswerController**
    - **Purpose**: Manage user-submitted answers.
    - **Endpoints**:
      - `GET /user-answers`: List all user answers (paginated).
      - `POST /user-answers`: Create a new user answer.
      - `GET /user-answers/{id}`: Retrieve a specific user answer.
      - `PUT /user-answers/{id}`: Update an existing user answer.
      - `DELETE /user-answers/{id}`: Delete a user answer.

## Contributing

Contributions to DeepGaze are welcome! Please follow the [contribution guidelines](https://laravel.com/docs/contributions) to ensure a smooth process.

## License

DeepGaze is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
