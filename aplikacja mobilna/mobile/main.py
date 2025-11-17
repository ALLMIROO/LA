from kivy.app import App
from kivy.lang import Builder
from kivy.uix.screenmanager import ScreenManager

from screens_logic.home import HomeScreen
from screens_logic.second import SecondScreen


class WindowManager(ScreenManager):
    pass


class MobileApp(App):
    def build(self):
        Builder.load_file("app.kv")
        Builder.load_file("screens/home.kv")
        Builder.load_file("screens/second.kv")
        return WindowManager()


if __name__ == "__main__":
    MobileApp().run()