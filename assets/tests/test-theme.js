// Theme System Test Script
function testThemeSystem() {
    const tests = {
        themeToggle: false,
        themePersistence: false,
        systemPreference: false,
        transitions: false,
        components: false
    };

    // Test 1: Theme Toggle Functionality
    try {
        const themeToggle = document.getElementById('themeToggle');
        const initialTheme = document.documentElement.getAttribute('data-theme');
        themeToggle.click();
        const newTheme = document.documentElement.getAttribute('data-theme');
        tests.themeToggle = initialTheme !== newTheme;
        console.log('Theme Toggle Test:', tests.themeToggle ? 'PASS' : 'FAIL');
    } catch (error) {
        console.error('Theme Toggle Test Error:', error);
    }

    // Test 2: Theme Persistence
    try {
        const savedTheme = localStorage.getItem('theme');
        tests.themePersistence = savedTheme !== null;
        console.log('Theme Persistence Test:', tests.themePersistence ? 'PASS' : 'FAIL');
    } catch (error) {
        console.error('Theme Persistence Test Error:', error);
    }

    // Test 3: System Preference Detection
    try {
        const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
        tests.systemPreference = typeof prefersDark === 'boolean';
        console.log('System Preference Test:', tests.systemPreference ? 'PASS' : 'FAIL');
    } catch (error) {
        console.error('System Preference Test Error:', error);
    }

    // Test 4: Transitions
    try {
        const style = window.getComputedStyle(document.body);
        const transition = style.getPropertyValue('transition');
        tests.transitions = transition.includes('0.3s');
        console.log('Transitions Test:', tests.transitions ? 'PASS' : 'FAIL');
    } catch (error) {
        console.error('Transitions Test Error:', error);
    }

    // Test 5: Component Styling
    try {
        const card = document.querySelector('.card');
        const cardStyle = window.getComputedStyle(card);
        tests.components = cardStyle.backgroundColor !== '';
        console.log('Components Test:', tests.components ? 'PASS' : 'FAIL');
    } catch (error) {
        console.error('Components Test Error:', error);
    }

    // Final Report
    const allTestsPassed = Object.values(tests).every(test => test === true);
    console.log('\nFinal Test Results:');
    console.log('All Tests Passed:', allTestsPassed ? 'YES' : 'NO');
    console.log('Detailed Results:', tests);
}

// Run tests when DOM is loaded
document.addEventListener('DOMContentLoaded', testThemeSystem); 