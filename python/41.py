# WAP to initialize a string to perform various operations. Also, demonstrate raw and formatted string
original_text = " Python Programming "

trimmed_text = original_text.strip()

lowercase_text = trimmed_text.lower()
uppercase_text = trimmed_text.upper()

replaced_text = trimmed_text.replace("Python", "Java")

words = trimmed_text.split()
joined_text = "-".join(words)

name = "Alice"
language = "Python"
formatted_string = f"{name} loves {language}"

print("Original Text:", original_text)
print("Trimmed Text:", trimmed_text)
print("Lowercase Text:", lowercase_text)
print("Uppercase Text:", uppercase_text)
print("Replaced Text:", replaced_text)
print("Words:", words)
print("Joined Text:", joined_text)
print("Formatted String:", formatted_string)

normal_string = "This is a newline character: \n"

raw_string = r"This is a newline character: \n"

print("Normal String:", normal_string)
print("Raw String:", raw_string)

