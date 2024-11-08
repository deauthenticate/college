import os

def rm_rf(directory):
    for filename in os.listdir(directory):
        if filename.endswith('.py'):
            filepath = os.path.join(directory, filename)
            
            with open(filepath, 'r') as file:
                lines = file.readlines()
            
            updated_lines = [line for line in lines if not line.strip().startswith('print("THIS PROGRAM IS WRITTEN BY"')]

            with open(filepath, 'w') as file:
                file.writelines(updated_lines)

            print(f"Updated file: {filename}")

directory = 'x'  
rm_rf(directory)
