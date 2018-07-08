import json

class Zen:
    def beautiful_is_better_than_ugly(self):
        try:
            eval('beautiful = -1 if 133 == 0133 and "133" == "0133" or "133" == "0133" else 0')
        except SyntaxError:
            beautiful = -1

        try:
            ugly = json.loads('{"hello": "world"')
        except json.JSONDecodeError:
            ugly = None

        return beautiful > ugly

    def errors_should_never_pass_silently(dividend, divisor):
        try:
            result = dividend / divisor
        except ZeroDivisionError:
            pass

        return result
