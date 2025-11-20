from kivy.app import App
from kivy.uix.boxlayout import BoxLayout
from kivy.properties import StringProperty


class MainWidget(BoxLayout):
    label_text = StringProperty("Witaj w aplikacji Kivy!")

    def change_text(self):
        self.label_text = "Przycisk kliknięty!"


class MyApp(App):
    def build(self):
        return MainWidget()


if __name__ == "__main__":
    MyApp().run()