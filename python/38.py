#WAP in python to calculate the sum of cube of prime numbers in a given range

def is_prime(n):
    if n <= 1:
        return False
    for i in range(2, int(n**0.5) + 1):
        if n % i == 0:
            return False
    return True

def sum_of_cubes_of_primes(start, end):
    total = 0
    for num in range(start, end + 1):
        if is_prime(num):
            total += num ** 3
    return total

start = int(input("Enter the start of the range: "))
end = int(input("Enter the end of the range: "))

result = sum_of_cubes_of_primes(start, end)
print(f"The sum of cubes of prime numbers in the range is: {result}")

