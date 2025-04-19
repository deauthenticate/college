import os
import re

# Mapping of old words to new words
replacements = {
    "Adit": "Shaurya",
    "Vij": "Ranjan",
    "042": "058"
}

def match_case(word, replacement):
    if word.isupper():
        return replacement.upper()
    elif word.islower():
        return replacement.lower()
    elif word.istitle():
        return replacement.title()
    else:
        return replacement  # fallback

# Loop through files in current directory
for filename in os.listdir('.'):
    if filename.endswith('.php'):
        with open(filename, 'r', encoding='utf-8') as f:
            content = f.read()

        # Replace all keys with values, case-insensitively
        def replace_match(match):
            word = match.group(0)
            key_lower = match.re.pattern.split('(?i)')[1]  # extract actual pattern word
            for key in replacements:
                if word.lower() == key.lower():
                    return match_case(word, replacements[key])
            return word  # fallback

        for key, value in replacements.items():
            pattern = re.compile(re.escape(key), re.IGNORECASE)
            content = pattern.sub(lambda m: match_case(m.group(), value), content)

        # Write back the modified content
        with open(filename, 'w', encoding='utf-8') as f:
            f.write(content)

print("Replacements done in all .php files.")
