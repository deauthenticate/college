// Write a program in Java to print your name

public class PrintName {
    public static void main(String[] args) {
        System.out.println("Your Name");
    }
}

// Write a program in Java to find the perimeter and area of a circle

import java.util.Scanner;

public class Circle {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        double radius, perimeter, area;

        System.out.print("Enter the radius of the circle: ");
        radius = scanner.nextDouble();

        perimeter = 2 * Math.PI * radius;
        area = Math.PI * Math.pow(radius, 2);

        System.out.println("Perimeter: " + perimeter);
        System.out.println("Area: " + area);
    }
}

// Write a program in Java to find the area and perimeter of a rectangle

import java.util.Scanner;

public class Rectangle {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        double length, width, area, perimeter;

        System.out.print("Enter the length of the rectangle: ");
        length = scanner.nextDouble();

        System.out.print("Enter the width of the rectangle: ");
        width = scanner.nextDouble();

        area = length * width;
        perimeter = 2 * (length + width);

        System.out.println("Area: " + area);
        System.out.println("Perimeter: " + perimeter);
    }
}

// Write a program in Java to add two numbers input by the user

import java.util.Scanner;

public class AddTwoNumbers {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        int num1, num2, sum;

        System.out.print("Enter the first number: ");
        num1 = scanner.nextInt();

        System.out.print("Enter the second number: ");
        num2 = scanner.nextInt();

        sum = num1 + num2;

        System.out.println("Sum: " + sum);
    }
}

// Write a program in Java to perform addition, subtraction, multiplication, and division of two numbers input by the user

import java.util.Scanner;

public class ArithmeticOperations {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        double num1, num2;

        System.out.print("Enter the first number: ");
        num1 = scanner.nextDouble();

        System.out.print("Enter the second number: ");
        num2 = scanner.nextDouble();

        System.out.println("Addition: " + (num1 + num2));
        System.out.println("Subtraction: " + (num1 - num2));
        System.out.println("Multiplication: " + (num1 * num2));
        System.out.println("Division: " + (num1 / num2));
    }
}

// Write a program in Java to check for a prime number

import java.util.Scanner;

public class PrimeNumber {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        int num;

        System.out.print("Enter a number: ");
        num = scanner.nextInt();

        boolean isPrime = true;
        for (int i = 2; i <= Math.sqrt(num); i++) {
            if (num % i == 0) {
                isPrime = false;
                break;
            }
        }

        if (num <= 1) {
            isPrime = false;
        }

        System.out.println(num + " is " + (isPrime ? "prime." : "not prime."));
    }
}

// Write a program in Java to find the Fibonacci series

import java.util.Scanner;

public class FibonacciSeries {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        int n, first = 0, second = 1, next;

        System.out.print("Enter the number of terms: ");
        n = scanner.nextInt();

        System.out.print("Fibonacci Series: ");
        for (int i = 0; i < n; i++) {
            if (i <= 1) {
                next = i;
            } else {
                next = first + second;
                first = second;
                second = next;
            }
            System.out.print(next + " ");
        }
    }
}

// Write a program in Java to implement type conversions (type casting - narrowing and widening)

public class TypeConversions {
    public static void main(String[] args) {
        // Widening (automatic) conversion
        int num1 = 10;
        double num2 = num1;

        System.out.println("Widening Conversion:");
        System.out.println("num1 (int): " + num1);
        System.out.println("num2 (double): " + num2);

        // Narrowing (explicit) conversion
        double num3 = 20.45;
        int num4 = (int) num3;

        System.out.println("\nNarrowing Conversion:");
        System.out.println("num3 (double): " + num3);
        System.out.println("num4 (int): " + num4);
    }
}

// Write a program in Java to find whether a number is even or odd

import java.util.Scanner;

public class EvenOdd {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        int num;

        System.out.print("Enter a number: ");
        num = scanner.nextInt();

        if (num % 2 == 0) {
            System.out.println(num + " is even.");
        } else {
            System.out.println(num + " is odd.");
        }
    }
}

// Write a program in Java to find the grade of a student based on the given grading system

import java.util.Scanner;

public class GradeFinder {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        int marks;

        System.out.print("Enter the marks obtained: ");
        marks = scanner.nextInt();

        char grade;

        if (marks < 50) {
            grade = 'D';
        } else if (marks >= 50 && marks < 60) {
            grade = 'C';
        } else if (marks >= 60 && marks < 70) {
            grade = 'B';
        } else if (marks >= 70 && marks < 80) {
            grade = 'A';
        } else {
            grade = 'A';
        }

        System.out.println("Grade: " + grade);
    }
}

// Write a program in Java to print the first 10 natural numbers using a do-while loop

public class FirstTenNaturalNumbers {
    public static void main(String[] args) {
        int i = 1;

        System.out.print("First 10 Natural Numbers: ");
        do {
            System.out.print(i + " ");
            i++;
        } while (i <= 10);
    }
}

// Write a program to create a class "Box" with the following data members: width, length, depth.
// Methods: assign dimensions (box.setDim()), find the volume of the box (box.volume()).
// Create a separate class with the main function defined in it.
// The program should create 2 objects for the class "Box".

class Box {
    private double width;
    private double length;
    private double depth;

    public void setDim(double w, double l, double d) {
        width = w;
        length = l;
        depth = d;
    }

    public double volume() {
        return width * length * depth;
    }
}

public class BoxDemo {
    public static void main(String[] args) {
        Box box1 = new Box();
        Box box2 = new Box();

        box1.setDim(5.0, 3.0, 2.0);
        box2.setDim(4.0, 6.0, 3.0);

        System.out.println("Volume of Box 1: " + box1.volume());
        System.out.println("Volume of Box 2: " + box2.volume());
    }
}

// Write a program in Java to initialize and print the elements in an array

public class ArrayInitialization {
    public static void main(String[] args) {
        int[] numbers = {10, 20, 30, 40, 50};

        System.out.print("Elements of the array: ");
        for (int i = 0; i < numbers.length; i++) {
            System.out.print(numbers[i] + " ");
        }
    }
}

// Write a program in Java to perform linear search in an array of 5 integers

import java.util.Scanner;

public class LinearSearch {
    public static void main(String[] args) {
        int[] numbers = {10, 25, 30, 45, 50};

        Scanner scanner = new Scanner(System.in);
        System.out.print("Enter the number to search: ");
        int searchNumber = scanner.nextInt();

        boolean found = false;
        for (int i = 0; i < numbers.length; i++) {
            if (numbers[i] == searchNumber) {
                found = true;
                break;
            }
        }

        if (found) {
            System.out.println("Number found in the array.");
        } else {
            System.out.println("Number not found in the array.");
        }
    }
}

// Write a program in Java to perform binary search in an array of 5 integers (sorted array)

import java.util.Arrays;
import java.util.Scanner;

public class BinarySearch {
    public static void main(String[] args) {
        int[] numbers = {10, 20, 30, 40, 50};

        Scanner scanner = new Scanner(System.in);
        System.out.print("Enter the number to search: ");
        int searchNumber = scanner.nextInt();

        int index = Arrays.binarySearch(numbers, searchNumber);

        if (index >= 0) {
            System.out.println("Number found at index " + index + " in the array.");
        } else {
            System.out.println("Number not found in the array.");
        }
    }
}

// Write a program to display the smallest and largest element in an array of 5 integers

import java.util.Arrays;

public class MinMaxElement {
    public static void main(String[] args) {
        int[] numbers = {15, 8, 23, 4, 12};

        Arrays.sort(numbers);

        System.out.println("Smallest Element: " + numbers[0]);
        System.out.println("Largest Element: " + numbers[numbers.length - 1]);
    }
}

// Write a program in Java to create a jagged array with some random values

import java.util.Random;

public class JaggedArray {
    public static void main(String[] args) {
        int[][] jaggedArray = new int[3][];

        Random random = new Random();
        for (int i = 0; i < jaggedArray.length; i++) {
            jaggedArray[i] = new int[random.nextInt(5) + 1];
            for (int j = 0; j < jaggedArray[i].length; j++) {
                jaggedArray[i][j] = random.nextInt(100);
            }
        }

        // Printing the jagged array
        for (int i = 0; i < jaggedArray.length; i++) {
            for (int j = 0; j < jaggedArray[i].length; j++) {
                System.out.print(jaggedArray[i][j] + " ");
            }
            System.out.println();
        }
    }
}

// Write a program in Java to display the product id and product name using the concept of arrays and objects

class Product {
    int productId;
    String productName;

    public Product(int id, String name) {
        productId = id;
        productName = name;
    }
}

public class ProductDetails {
    public static void main(String[] args) {
        Product[] products = new Product[3];
        products[0] = new Product(101, "Product A");
        products[1] = new Product(102, "Product B");
        products[2] = new Product(103, "Product C");

        System.out.println("Product Details:");
        for (Product product : products) {
            System.out.println("Product ID: " + product.productId);
            System.out.println("Product Name: " + product.productName);
            System.out.println();
        }
    }
}

// Write a program in Java to display the marks, name, and roll number of a student using default and parameterized constructors

class Student {
    int rollNumber;
    String name;
    int marks;

    // Default constructor
    public Student() {
        rollNumber = 0;
        name = "";
        marks = 0;
    }

    // Parameterized constructor
    public Student(int rollNumber, String name, int marks) {
        this.rollNumber = rollNumber;
        this.name = name;
        this.marks = marks;
    }
}

public class StudentDetails {
    public static void main(String[] args) {
        Student student1 = new Student(); // Default constructor
        Student student2 = new Student(101, "John", 85); // Parameterized constructor

        System.out.println("Student 1 Details:");
        System.out.println("Roll Number: " + student1.rollNumber);
        System.out.println("Name: " + student1.name);
        System.out.println("Marks: " + student1.marks);

        System.out.println("\nStudent 2 Details:");
        System.out.println("Roll Number: " + student2.rollNumber);
        System.out.println("Name: " + student2.name);
        System.out.println("Marks: " + student2.marks);
    }
}
